<?php
class Model
{
    protected $table;
    protected $primaryKey = 'id';
    protected $db;
    protected $query;
    protected array $attributes = []; // Store fields here
    protected array $columns = [];    // All columns
    protected array $fields = [];     // Fields allowed for create/update
    protected array $filters = [];    // Fields allowed for search
    protected array $guarded = [];    // Dynamic and manual guarded fields
    protected bool $fieldsPrepared = false;
    protected $orders = [];

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();

        if (!$this->table) {
            throw new Exception("Model table is not defined in class: " . static::class);
        }

        $this->query = QueryBuilder::table($this->table);
    }

    public function findAll(array $options = [])
    {
        $this->prepareFields();
        $query = QueryBuilder::table($this->table);

        // Filters
        if (!empty($options['filters'])) {
            foreach ($options['filters'] as $column => $value) {
                if (in_array($column, $this->columns)) {
                    $query->where($column, '=', $value);
                }
            }
        }

        // Search
        if (!empty($options['search'])) {
            $term = $options['search']['term'] ?? '';
            $columns = $options['search']['columns'] ?? [];

            if (!empty($term) && !empty($columns)) {
                $query->where(function ($q) use ($term, $columns) {
                    foreach ($columns as $i => $column) {
                        $i === 0
                            ? $q->where($column, 'LIKE', "%$term%")
                            : $q->orWhere($column, 'LIKE', "%$term%");
                    }
                });
            }
        }


        // Sorting
        if (!empty($options['sort'])) {
            $column = $options['sort']['column'] ?? '';
            $direction = strtolower($options['sort']['direction'] ?? 'asc');

            if (in_array($column, $this->columns) && in_array($direction, ['asc', 'desc'])) {
                $query->orderBy($column, $direction);
            }
        }


        // Pagination — return full result with meta
        if (!empty($options['pagination']) && $options['pagination']['enabled']) {
            $page = max(1, (int)($options['pagination']['page'] ?? 1));
            $perPage = max(1, (int)($options['pagination']['perPage'] ?? 10));

            return $query->paginate($page, $perPage)->get(); // Return array with data + meta
        }

        return $query; // Return builder for further chaining (select, where, first, etc.)
    }



    // Forward the whereRaw call to the QueryBuilder instance
    public function whereRaw($sql)
    {
        $this->query->whereRaw($sql);
        return $this;
    }

    // --- Prepare Fields ---

    protected function prepareFields()
    {
        if ($this->fieldsPrepared) return $this->fields;

        $stmt = $this->db->prepare("SHOW COLUMNS FROM {$this->table}");
        $stmt->execute();
        $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($columns as $column) {
            $fieldName = $column['Field'];
            $fieldType = strtolower($column['Type']);

            $this->columns[] = $fieldName;

            // Guard fields that end with 'id'
            if (preg_match('/id$/i', $fieldName)) {
                $this->guarded[] = $fieldName;
            }

            if (!in_array($fieldName, $this->guarded)) {
                $this->fields[] = $fieldName;
            }

            if (strpos($fieldType, 'varchar') !== false || strpos($fieldType, 'text') !== false || strpos($fieldType, 'enum') !== false) {
                $this->filters[] = $fieldName;
            }
        }

        $this->fieldsPrepared = true;
        return $this->fields;
    }

    // --- Magic Methods ---

    public function __get($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    // --- Core CRUD ---
public function create($data)
{
    // Case 1: If $fields is defined → use it
    if (!empty($this->fields)) {
        $allowedFields = $this->fields;

        // Case 1a: If $guarded is also defined → exclude guarded
        if (!empty($this->guarded)) {
            $allowedFields = array_diff($this->fields, $this->guarded);
        }

        // Filter data using allowedFields
        $data = array_intersect_key($data, array_flip($allowedFields));

    } elseif (!empty($this->guarded)) {
        // Case 2: Only $guarded defined → exclude those
        $data = array_diff_key($data, array_flip($this->guarded));

    } else {
        // Case 3: Neither $fields nor $guarded defined → trust all
        // No filtering needed
    }

    return $this->query->insert($data);
}


    public function find($key = null, $column = null)
    {
        if ($key !== null) {
            $column = $column ?? $this->primaryKey;
            $this->query->where($column, '=', $key);
            $row = $this->query->first();
            if (!$row) return null;
            $model = new static();
            $model->fill(get_object_vars($row));
            return $model;
        }
        return $this; // allows chaining with where()
    }
    public function update($data, $key = null, $column = null)
    {
        $this->prepareFields(); // Prepare fields just in case

        $data = array_intersect_key($data, array_flip(array_diff($this->fields, $this->guarded)));

        // Apply WHERE if an ID is passed
        if ($key !== null) {
            $column = $column ?? $this->primaryKey;
            $this->query->where($column, '=', $key);
        }

        // ✅ Check the builder's WHERE conditions
        $sql = $this->query->toSql();
        if (stripos($sql, 'where') === false) {
            throw new Exception("Update failed: No WHERE clause or ID provided.");
        }

        return $this->query->update($data);
    }



    public function deleteOld($key = null, $column = null)
    {
        // Always start fresh QueryBuilder to avoid leftover WHEREs
        $this->query = QueryBuilder::table($this->table);

        if ($key !== null) {
            $column = $column ?? $this->primaryKey;
            $this->query->where($column, '=', $key);
        }

        if (!$this->query->hasWhere()) {
            throw new Exception("Delete failed: No WHERE clause or ID provided.");
        }

        return $this->query->delete();
    }

public function delete($key = null, $column = null)
{
    // ✅ Only apply this if key is passed manually
    if ($key !== null) {
        $this->query = QueryBuilder::table($this->table); // reset
        $column = $column ?? $this->primaryKey;
        $this->query->where($column, '=', $key);
    }

    // ✅ If called via ->where(...)->delete()
    if (!$this->query->hasWhere()) {
        throw new Exception("Delete failed: No WHERE clause or ID provided.");
    }

    return $this->query->delete();
}



    public function truncate()
    {
        $this->db->exec("SET FOREIGN_KEY_CHECKS=0");
        $this->db->exec("TRUNCATE TABLE {$this->table}");
        $this->db->exec("SET FOREIGN_KEY_CHECKS=1");
        return true;
    }



    public function save()
    {
        if (isset($this->attributes[$this->primaryKey])) {
            return $this->update($this->attributes, $this->attributes[$this->primaryKey]);
        } else {
            return $this->create($this->attributes);
        }
    }



    // --- Import & Export ---

    public function import(array $file): array
    {
        if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
            throw new Exception('File upload failed.');
        }

        $stream = fopen($file['tmp_name'], 'r');
        $header = fgetcsv($stream);
        if (!$header) {
            throw new Exception('Invalid CSV header.');
        }

        $count = 0;
        $skipped = 0;
        $errors = [];

        while (($row = fgetcsv($stream)) !== false) {
            $data = array_combine($header, $row);
            $data = array_map(fn($v) => $v === '' ? null : $v, $data);

            $validationErrors = method_exists($this, 'validate') ? $this->validate($data) : [];

            if (!empty($validationErrors)) {
                $skipped++;
                $errors[] = ['row' => $data, 'errors' => $validationErrors];
                continue;
            }

            try {
                $this->create($data);
                $count++;
            } catch (Exception $e) {
                $errors[] = ['row' => $data, 'error' => $e->getMessage()];
            }
        }

        fclose($stream);

        return [
            'message'  => "Imported $count new records.",
            'imported' => $count,               // ✅ Add this key
            'skipped'  => $skipped,
            'failed'   => count($errors),
            'errors'   => $errors
        ];

    }

    public function export(array $rows, string $filename = 'export.csv'): void
    {
        if (ob_get_level()) ob_end_clean();

        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $output = fopen('php://output', 'w');

        if (!empty($rows)) {
            fputcsv($output, array_keys((array) $rows[0]));
            foreach ($rows as $row) {
                fputcsv($output, (array) $row);
            }
        }

        fclose($output);
        exit;
    }

    // --- Query Builder Wrappers ---

    public function filter($conditions)
    {
        foreach ($conditions as $column => $value) {
            if (is_array($value)) {
                $this->whereIn($column, $value);
            } elseif ($value === 'NULL') {
                $this->whereNull($column);
            } elseif ($value === 'NOT NULL') {
                $this->whereNotNull($column);
            } else {
                $this->where($column, '=', $value);
            }
        }
        return $this;
    }


    public function search($term, $columns)
    {
        $this->where(function ($query) use ($term, $columns) {
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $term . '%');
            }
        });
        return $this;
    }

    public function orderBy($column, $direction = 'desc')
    {
        $this->query->orderBy($column, $direction);
        return $this;
    }

    public function paginate($page, $perPage)
    {
        $offset = ($page - 1) * $perPage;
        $this->limit($perPage)->offset($offset);

        $data = $this->get();
        $total = $this->count();
        $totalPages = ceil($total / $perPage);

        return [
            'data' => $data,
            'meta' => [
                'total'       => $total,
                'totalPages'  => $totalPages,
                'currentPage' => $page,
                'perPage'     => $perPage,
            ],
        ];
    }

    public function select($columns)
    {
        $this->query->select($columns);
        return $this;
    }

    public function all()
    {
        $rows = $this->query->get();

        $models = [];
        foreach ($rows as $row) {
            $model = new static();
            $model->fill(get_object_vars($row));
            $models[] = $model;
        }

        return $models;
    }


    public function first()
    {
        $row = $this->query->first();

        if (!$row) {
            return null;
        }

        $model = new static();
        $model->fill(get_object_vars($row));
        return $model;
    }

    public function where($column, $operator = null, $value = null)
    {
        if (is_callable($column)) {
            $this->query->where($column); // pass closure directly to QueryBuilder
            return $this;
        }

        $this->query->where($column, $operator, $value);
        return $this;
    }
    public function orWhere($column, $operator = null, $value = null)
    {
        $this->query->orWhere($column, $operator, $value);
        return $this;
    }


    public function whereIn($column, $values)
    {
        $this->query->whereIn($column, $values);
        return $this;
    }

    public function whereNull($column)
    {
        $this->query->whereNull($column);
        return $this;
    }

    public function whereNotNull($column)
    {
        $this->query->whereNotNull($column);
        return $this;
    }

    public function limit($limit)
    {
        $this->query->limit($limit);
        return $this;
    }

    public function offset($offset)
    {
        $this->query->offset($offset);
        return $this;
    }

    public function get()
    {
        $rows = $this->query->get();

        $models = [];
        foreach ($rows as $row) {
            $model = new static();
            $model->fill(get_object_vars($row));
            $models[] = $model;
        }

        return $models;
    }

    public function count()
    {
        return $this->query->count();
    }

    // --- Helper Methods ---


    public function validate(?array $data = null): array
    {
        $data = $data ?? $_POST;

        if (!property_exists($this, 'validationRules') || empty($this->validationRules)) {
            return [];
        }

        $validator = new Validator();
        $validator->rules($this->validationRules);
        $validator->validate($data);

        return $validator->fails()
            ? $validator->errors()
            : [];
    }



    public function toArray(): array
    {
        return $this->attributes;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function toSql(): string
    {
        return $this->query->toSql();
    }

    public function logQuery(): void
    {
        $sql = $this->toSql();
        $logFile = __DIR__ . '/queries.log';
        file_put_contents($logFile, $sql . PHP_EOL, FILE_APPEND);
    }

    public function getTable(): string
    {
        return $this->table;
    }

    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    public function fill(array $data)
    {
        foreach ($data as $key => $value) {
            $this->attributes[$key] = $value;
        }
        return $this;
    }

    // --- Internal Auto-Loader for Related Models ---

    protected function loadModelIfNotExists($modelClass)
    {
        if (!class_exists($modelClass)) {
            $modelPath = "../app/models/" . $modelClass . ".php";

            if (file_exists($modelPath)) {
                require_once $modelPath;
            } else {
                throw new Exception("Related model $modelClass not found at $modelPath");
            }
        }
    }

    // --- Relationship Methods with Autoloading ---

    public function hasOne($relatedModel, $foreignKey, $localKey = null)
    {
        $this->loadModelIfNotExists($relatedModel);

        $localKey = $localKey ?? $this->primaryKey;
        $related = new $relatedModel;
        return $related->where($foreignKey, '=', $this->{$localKey})->first();
    }

    public function hasMany($relatedModel, $foreignKey, $localKey = null)
    {
        $this->loadModelIfNotExists($relatedModel);

        $localKey = $localKey ?? $this->primaryKey;
        $related = new $relatedModel;
        return $related->where($foreignKey, '=', $this->{$localKey})->all();
    }

    public function belongsTo($relatedModel, $foreignKey, $ownerKey = 'id')
    {
        $this->loadModelIfNotExists($relatedModel);

        $related = new $relatedModel;
        return $related->where($ownerKey, '=', $this->{$foreignKey})->first();
    }

    public function belongsToMany($relatedModel, $pivotTable, $foreignPivotKey, $relatedPivotKey, $localKey = null)
    {
        $this->loadModelIfNotExists($relatedModel);

        $localKey = $localKey ?? $this->primaryKey;
        $related = new $relatedModel;
        $relatedTable = $related->getTable();

        $sql = "
            SELECT $relatedTable.*
            FROM $relatedTable
            JOIN $pivotTable ON $pivotTable.$relatedPivotKey = $relatedTable.{$related->getPrimaryKey()}
            WHERE $pivotTable.$foreignPivotKey = :foreignId
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['foreignId' => $this->{$localKey}]);

        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

        $models = [];
        foreach ($rows as $row) {
            $model = new $relatedModel();
            $model->fill(get_object_vars($row));
            $models[] = $model;
        }

        return $models;
    }

    public function morphMany($relatedModel, $morphType, $morphId)
    {
        $this->loadModelIfNotExists($relatedModel);

        $related = new $relatedModel;
        return $related->where($morphType, '=', static::class)
            ->where($morphId, '=', $this->{$this->primaryKey})
            ->all();
    }

    public function morphTo($typeField, $idField)
    {
        $relatedClass = $this->{$typeField};
        $relatedId = $this->{$idField};

        if (!class_exists($relatedClass)) {
            $this->loadModelIfNotExists($relatedClass);
        }

        if (!class_exists($relatedClass)) {
            return null;
        }

        $related = new $relatedClass;
        return $related->find($relatedId);
    }
}
