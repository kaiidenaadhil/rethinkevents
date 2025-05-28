<?php

function parseJsonToDataAndFields(string $json): array {
    $schema = json_decode($json, true);

    if (!is_array($schema)) {
        throw new Exception("Invalid JSON schema.");
    }

    $rules = [];
    $fields = [];
    $fileFields = [];
    $specialFields = [];

    foreach ($schema as $field => $ruleString) {
        $fieldRules = [];
        $rulesArray = explode("|", $ruleString);
        $fileExtensions = [];

        foreach ($rulesArray as $rule) {
            $ruleParts = explode(":", $rule, 2);
            $ruleName = $ruleParts[0];
            $ruleValue = $ruleParts[1] ?? null;

            switch ($ruleName) {
                case "string":
                case "integer":
                case "decimal":
                case "double":
                case "float":
                case "boolean":
                    $fieldRules[] = "required";
                    break;

                case "max":
                case "min":
                    if ($ruleValue !== null) {
                        $fieldRules[] = "$ruleName:$ruleValue";
                    }
                    break;

                case "nullable":
                case "unique":
                    $fieldRules[] = $ruleName;
                    break;

                case "primary_key":
                case "auto_increment":
                    $specialFields[$field][$ruleName] = true;
                    break;

                case "enum":
                    if ($ruleValue !== null) {
                        $allowed = explode(",", $ruleValue);
                        $fieldRules[] = "in:" . implode(",", $allowed);
                    }
                    break;

                case "foreign":
                    if (!empty($ruleValue)) {
                        // Exploding by colon instead of comma (for the format: "foreign:table:column")
                        $ruleParts = array_map('trim', explode(":", $ruleValue));

                        if (count($ruleParts) === 2) {
                            // Unpack only if we have exactly two elements: table and column
                            [$table, $column] = $ruleParts;
                            $specialFields[$field]['foreign'] = [
                                'table' => $table,
                                'column' => $column,
                            ];
                        } else {
                            throw new Exception("Invalid foreign key format for '{$field}'. It should be 'table:column'.");
                        }
                    }
                    break;

                case "file":
                    $fieldRules[] = "file";

                    if ($ruleValue === "*") {
                        $fileExtensions = [
                            'jpg', 'jpeg', 'png', 'webp', 'gif',
                            'pdf', 'doc', 'docx', 'mp3', 'mp4'
                        ];
                    } elseif (!empty($ruleValue)) {
                        $fileExtensions = explode(",", $ruleValue);
                    }
                    break;

                default:
                    break;
            }
        }

        // Clean up file extensions if any were set
        if (!empty($fileExtensions)) {
            $fileFields[$field] = array_unique(array_map(function ($ext) {
                return trim(str_replace("file:", "", $ext));
            }, $fileExtensions));
        }

        // Combine the individual field rules into a single rule string
        $rules[$field] = implode("|", array_unique($fieldRules));
        $fields[] = $field;
    }

    return [$rules, $fields, $fileFields, $specialFields];
}


function createController($model, $printRules, $printColumns, $fileFields = [])
{
    $singular      = singularize($model);                         // e.g., project
    $className     = ucfirst($singular) . 'Controller';           // ProjectController
    $modelClass    = ucfirst($singular) . 'Model';                // ProjectModel
    $viewFolder    = strtolower($model);                          // e.g., projects
    $identify      = $singular . 'Identify';                      // projectIdentify
    $varPlural     = $model;                                      // e.g., projects
    $varSingular   = $singular;                                   // e.g., project

    $code = "<?php\n\n";
    $code .= "class {$className} extends Controller\n";
    $code .= "{\n";

    // Index
    $code .= "    public function {$varSingular}Index(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        //  Extract filters from \$_GET like ?filter_status=active\n";
    $code .= "        \$filters = [];\n";
    $code .= "        foreach (\$_GET as \$key => \$value) {\n";
    $code .= "            if (strpos(\$key, 'filter_') === 0 && \$value !== '') {\n";
    $code .= "                \$filters[substr(\$key, 7)] = \$value;\n";
    $code .= "            }\n";
    $code .= "        }\n\n";
    $code .= "        //  Extract sort from \$_GET like ?sort_title=desc\n";
    $code .= "        \$sorts = [];\n";
    $code .= "        foreach (\$_GET as \$key => \$value) {\n";
    $code .= "            if (strpos(\$key, 'sort_') === 0 && in_array(strtolower(\$value), ['asc', 'desc'])) {\n";
    $code .= "                \$sorts[substr(\$key, 5)] = strtoupper(\$value);\n";
    $code .= "            }\n";
    $code .= "        }\n\n";
    $code .= "        //  Use first sort column or fallback\n";
    $code .= "        [\$sortColumn, \$sortDirection] = ! empty(\$sorts)\n";
    $code .= "            ? [array_key_first(\$sorts), \$sorts[array_key_first(\$sorts)]]\n";
    $code .= "            : ['{$identify}CreatedAt', 'ASC'];\n\n";
    $code .= "        //  Build unified options array\n";
    $code .= "        \$options = [\n";
    $code .= "            'filters'    => \$filters,\n";
    $code .= "            'search'     => [\n";
    $code .= "                'term'    => \$_GET['search'] ?? '',\n";
    $code .= "                'columns' => ['{$identify}Title'],\n"; // You can make this dynamic
    $code .= "            ],\n";
    $code .= "            'pagination' => [\n";
    $code .= "                'enabled' => true,\n";
    $code .= "                'page'    => \$_GET['page'] ?? 1,\n";
    $code .= "                'perPage' => \$_GET['perPage'] ?? 10,\n";
    $code .= "            ],\n";
    $code .= "            'sort'       => [\n";
    $code .= "                'column'    => \$sortColumn,\n";
    $code .= "                'direction' => \$sortDirection,\n";
    $code .= "            ],\n";
    $code .= "        ];\n\n";
    $code .= "        //  Fetch from model\n";
    $code .= "        \${$varPlural} = \$this->model('{$modelClass}')->findAll(\$options);\n\n";
    $code .= "        if (! is_array(\${$varPlural}) || ! isset(\${$varPlural}['data'], \${$varPlural}['meta'])) {\n";
    $code .= "            throw new Exception(\"Invalid response from findAll()\");\n";
    $code .= "        }\n\n";
    $code .= "        //  Return view\n";
    $code .= "        return \$this->adminView('{$viewFolder}/{$varSingular}All', [\n";
    $code .= "            '{$varPlural}' => \${$varPlural}['data'],\n";
    $code .= "            'meta'         => \${$varPlural}['meta'],\n";
    $code .= "        ]);\n";
    $code .= "    }\n\n";

    // Create
    $code .= "    public function {$varSingular}Create(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        return \$this->adminView('{$viewFolder}/{$varSingular}New');\n";
    $code .= "    }\n\n";

    // Store
    $code .= "    public function {$varSingular}Store(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        \$data = \$request->getBody();\n";
    $code .= "        \$data['{$varSingular}Identify'] = generateUniqueId();\n";

    // Handle file uploads dynamically
    if (!empty($fileFields)) {
        $code .= "        // Handle file uploads\n";
        $code .= "        \$uploadsDir = '../public/assets/alpha-theme/img/uploads/';\n";
        $defaultExts = "['jpg','jpeg','png','webp','gif','pdf','doc','docx','mp3','mp4']";

        foreach ($fileFields as $fileField => $types) {
            $extList = ($types === '*' || $types === ['*']) 
                ? $defaultExts 
                : var_export($types, true);

            $code .= "        // Upload for {$fileField}\n";
            $code .= "        \$allowedExts = {$extList};\n";
            $code .= "        \$filename = uploadFile('{$fileField}', \$uploadsDir, \$allowedExts, 52428800, true);\n";
            $code .= "        if (\$filename) {\n";
            $code .= "            \$data['{$fileField}'] = \$filename;\n";
            $code .= "        } else {\n";
            $code .= "            echo \"Upload failed for {$fileField}!\";\n";
            $code .= "        }\n";
        }

        $code .= "\n";
    }

    $code .= "        \$model = \$this->model('{$modelClass}');\n\n";
    $code .= "        \$errors = \$model->validate(\$data);\n\n";
    $code .= "        if (!empty(\$errors)) {\n";
    $code .= "            return \$this->view('{$viewFolder}/{$varSingular}New', [\n";
    $code .= "                'errors' => \$errors,\n";
    $code .= "                'old'    => \$data,\n";
    $code .= "            ]);\n";
    $code .= "        }\n\n";
    $code .= "        \$model->create(\$data);\n";
    $code .= "        return redirect('admin/{$varPlural}');\n";
    $code .= "    }\n\n";


    // Edit
    $code .= "    public function {$varSingular}Edit(Request \$request, Response \$response, \${$identify})\n";
    $code .= "    {\n";
    $code .= "        \$record = \$this->model('{$modelClass}')->find()->where('{$identify}', \${$identify})->get();\n";
    $code .= "        if (!\$record) return redirect('admin/{$varPlural}');\n";
    $code .= "        return \$this->adminView('{$viewFolder}/{$varSingular}Edit', ['{$varSingular}' => \$record[0]]);\n";
    $code .= "    }\n\n";

// Update
$code .= "    public function {$varSingular}Update(Request \$request, Response \$response, \${$identify})\n";
$code .= "    {\n";
$code .= "        \$model = \$this->model('{$modelClass}');\n";
$code .= "        \$data  = \$request->getBody();\n";

// Handle file uploads dynamically
if (!empty($fileFields)) {
    $code .= "        // Handle file uploads\n";
    $code .= "        \$uploadsDir = '../public/assets/alpha-theme/img/uploads/';\n";
    $defaultExts = "['jpg','jpeg','png','webp','gif','pdf','doc','docx','mp3','mp4']";

    foreach ($fileFields as $fileField => $types) {
        $extList = ($types === '*' || $types === ['*']) 
            ? $defaultExts 
            : '[' . implode(',', array_map(fn($ext) => "'$ext'", $types)) . ']';

        $code .= "        // Upload for {$fileField}\n";
        $code .= "        \$allowedExts = {$extList};\n";
        $code .= "        \$filename = uploadFile('{$fileField}', \$uploadsDir, \$allowedExts, 52428800, true);\n";
        $code .= "        if (\$filename) {\n";
        $code .= "            \$data['{$fileField}'] = \$filename;\n";
        $code .= "        } else {\n";
        $code .= "            unset(\$data['{$fileField}']);\n";
        $code .= "        }\n";
    }

    $code .= "\n";
}

$code .= "        \$errors = \$model->validate(\$data);\n\n";
$code .= "        if (!empty(\$errors)) {\n";
$code .= "            \$data['{$identify}'] = \${$identify};\n";
$code .= "            return \$this->adminView('{$viewFolder}/{$varSingular}Edit', [\n";
$code .= "                'errors'  => \$errors,\n";
$code .= "                '{$varSingular}' => (object) \$data,\n";
$code .= "            ]);\n";
$code .= "        }\n\n";
$code .= "        \$model->update(\$data, \${$identify}, '{$identify}');\n";
$code .= "        return redirect('admin/{$varPlural}');\n";
$code .= "    }\n\n";


    // Show
    $code .= "    public function {$varSingular}Show(Request \$request, Response \$response, \${$identify})\n";
    $code .= "    {\n";
    $code .= "        \$record = \$this->model('{$modelClass}')->find()->where('{$identify}', \${$identify})->get();\n";
    $code .= "        if (!\$record) return redirect('admin/{$varPlural}');\n";
    $code .= "        return \$this->adminView('{$viewFolder}/{$varSingular}Single', ['{$varSingular}' => \$record[0]]);\n";
    $code .= "    }\n\n";

    // Destroy
    $code .= "    public function {$varSingular}Destroy(Request \$request, Response \$response, \${$identify})\n";
    $code .= "    {\n";
    $code .= "        \$this->model('{$modelClass}')->where('{$identify}', \${$identify})->delete();\n";
    $code .= "        return redirect('admin/{$varPlural}');\n";
    $code .= "    }\n\n";

    // Truncate Selected
    $code .= "    public function {$varSingular}Truncate(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        \$model = \$this->model('{$modelClass}');\n";
    $code .= "        \$ids   = \$request->getBody()['selectedIds'] ?? [];\n\n";
    $code .= "        if (! empty(\$ids)) {\n";
    $code .= "            foreach (\$ids as \$id) {\n";
    $code .= "                \$model->delete(\$id, '{$identify}');\n";
    $code .= "            }\n";
    $code .= "        } else {\n";
    $code .= "            \$model->truncate();\n";
    $code .= "        }\n\n";
    $code .= "        return redirect('admin/{$varPlural}');\n";
    $code .= "    }\n\n";

    // Export
    $code .= "    public function {$varSingular}Export(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        \$model = \$this->model('{$modelClass}');\n";
    $code .= "        \$records = \$model->findAll()->get();\n";
    $code .= "        \$model->export(\$records, '{$varPlural}_export.csv');\n";
    $code .= "    }\n\n";

    // Import
    $code .= "    public function {$varSingular}Import(Request \$request, Response \$response)\n";
    $code .= "    {\n";
    $code .= "        try {\n";
    $code .= "            \$result = \$this->model('{$modelClass}')->import(\$_FILES['file']);\n";
    $code .= "            \$_SESSION['success_message'] = \"Imported {\$result['imported']} records. Skipped: {\$result['skipped']}, Failed: {\$result['failed']}\";\n";
    $code .= "        } catch (Exception \$e) {\n";
    $code .= "            \$_SESSION['error_message'] = 'Import failed: ' . \$e->getMessage();\n";
    $code .= "        }\n";
    $code .= "        return redirect('admin/{$varPlural}');\n";
    $code .= "    }\n";

    $code .= "}\n";

    // Write to controller file
    file_put_contents("./../app/controllers/{$className}.php", $code);
}


function createModel($table, $printColumns, $rules = [], $specialFields = [])
{
    $baseName   = ucfirst(singularize($table));               // e.g., EventCategory
    $className  = $baseName . 'Model';                        // e.g., EventCategoryModel
    $tableName  = strtolower($table);                         // e.g., eventcategories
    $prefix     = strtolower(singularize($table));            // e.g., eventcategory
    $primaryKey = $prefix . 'Id';                             // e.g., eventcategoryId

    $code = "<?php\n\n";
    $code .= "class {$className} extends Model\n";
    $code .= "{\n";
    $code .= "    protected \$table      = '{$tableName}';\n";
    $code .= "    protected \$primaryKey = '{$primaryKey}';\n\n";

    // Fields to skip from validation
    $skipFields = [
        $primaryKey,
        $prefix . 'CreatedAt',
        $prefix . 'UpdatedAt',
        $prefix . 'Identify',
    ];

    // Filter out validation rules
    $filteredRules = [];

    foreach ($rules as $field => $rule) {
        // Skip if field is in skip list or marked primary/nullable
        if (
            in_array($field, $skipFields, true) ||
            str_contains($rule, 'primary_key') ||
            str_contains($rule, 'auto_increment')
        ) {
            continue;
        }

        // Add nullable prefix for file fields
        $filteredRules[$field] = (str_contains($rule, 'file') ? 'nullable|' : '') . $rule;
    }

    // Output validationRules if any
    if (!empty($filteredRules)) {
        $code .= "    protected array \$validationRules = [\n";
        foreach ($filteredRules as $field => $rule) {
            $code .= "        '{$field}' => '" . addslashes($rule) . "',\n";
        }
        $code .= "    ];\n\n";
    }

    // Add foreign keys if defined
    foreach ($specialFields as $field => $meta) {
        if (isset($meta['foreign'])) {
            $relatedModel = ucfirst(singularize($meta['foreign']['table'])) . 'Model';
            $method = lcfirst(singularize($meta['foreign']['table']));
            $code .= "    public function {$method}()\n";
            $code .= "    {\n";
            $code .= "        return \$this->belongsTo({$relatedModel}::class, '{$field}', '{$meta['foreign']['column']}');\n";
            $code .= "    }\n\n";
        }
    }

    $code .= "}\n";

    file_put_contents("./../app/models/{$className}.php", $code);
}
