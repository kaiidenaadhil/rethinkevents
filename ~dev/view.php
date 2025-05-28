<?php
$_ENV = parse_ini_file('./../app/config/local.env', false, INI_SCANNER_RAW);
define("APP_NAME",$_ENV["APP_NAME"]);
define("THEME",$_ENV["THEME"]);
define('DB_TYPE',$_ENV["DB_CONNECTION"]);
define('DB_HOST',$_ENV["DB_HOST"]);
define('DB_NAME',$_ENV["DB_DATABASE"]);
define('DB_USER',$_ENV["DB_USERNAME"]);
define('DB_PASS',$_ENV["DB_PASSWORD"]);

function createView($dirname, $tableSchema, $searchColumns)
{
    $path = "../app/views/" . THEME . "/$dirname";
    $singular = singularize($dirname);

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    } else {
        echo "View folder already exists.\n";
    }

    // New View
    $file1 = fopen("$path/{$singular}New.php", 'w');
    $codeNew = generateForm($tableSchema, $dirname);
    fwrite($file1, $codeNew);
    fclose($file1);

    // All View
    $file2 = fopen("$path/{$singular}All.php", 'w');
    $codeAll = generateTableAll($tableSchema, $searchColumns, $dirname);
    fwrite($file2, $codeAll);
    fclose($file2);

    // Single View
    $file3 = fopen("$path/{$singular}Single.php", 'w');
    $codeSingle = generateTable($tableSchema, $searchColumns, $dirname);
    fwrite($file3, $codeSingle);
    fclose($file3);

    // Edit View
    $file4 = fopen("$path/{$singular}Edit.php", 'w');
    $codeEdit = generateEditForm($tableSchema, $dirname);
    fwrite($file4, $codeEdit);
    fclose($file4);

    echo "✔️ Views created in views/$dirname folder.\n";
}



  function generateTableLoops($columns,$model) {

    // Initialize loop string
    $loopString = '';
    
    // Generate loop code for each column
    foreach ($columns as $column) {
      $loopString .= '<td><?= $'.$model.'[\''.$column.'\'] ?></td>' . "\n";
    }
    
    // Return loop string
    return $loopString;
  }


  function generateFormField($columnName, $columnType)
{
    $label = camelCaseToSentence($columnName);
    $isNullable = strpos($columnType, 'nullable') !== false;

    $field = '';
    $field .= '    <div class="form-group">' . "\n";
    $field .= '      <label for="' . $columnName . '">' . $label . '</label>' . "\n";

    if (strpos($columnType, 'enum:') !== false) {
        preg_match('/enum:([a-zA-Z0-9_,\- ]+)/', $columnType, $matches);
        $options = explode(',', $matches[1]);
        $field .= '      <select id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
        foreach ($options as $option) {
            $field .= '        <option value="' . $option . '">' . ucfirst($option) . '</option>' . "\n";
        }
        $field .= '      </select>' . "\n";
    } elseif (preg_match('/tinyint\(1\)|boolean/i', $columnType)) {
        $field .= '      <input type="checkbox" id="' . $columnName . '" name="' . $columnName . '" value="1">' . "\n";
    } elseif (preg_match('/text|longtext/i', $columnType)) {
        $field .= '      <textarea id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '></textarea>' . "\n";
    } elseif (strpos($columnType, 'file') !== false || stripos($columnName, 'file') !== false || stripos($columnName, 'image') !== false) {
        $field .= '      <input type="file" id="' . $columnName . '" name="' . $columnName . '">' . "\n";
    } elseif (preg_match('/decimal|float|double/i', $columnType)) {
        $field .= '      <input type="number" step="0.01" id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    } elseif (preg_match('/int|integer/i', $columnType)) {
        $field .= '      <input type="number" id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    } elseif (preg_match('/date|timestamp/i', $columnType)) {
        $field .= '      <input type="datetime-local" id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    } else {
        $field .= '      <input type="text" id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    }

    $field .= '    </div>' . "\n";
    return $field;
}

  
function generateForm($tableSchema, $model)
{
    $table = singularize($model);
    $fieldsToRemove = [$table . 'CreatedAt', $table . 'UpdatedAt', $table . 'Identify'];
    $tableSchema = removeFields($tableSchema, $fieldsToRemove);
    array_shift($tableSchema); // remove primary key if needed

    $html = '<div class="dashboard">' . "\n";
    $html .= '  <div class="top-row">' . "\n";
    $html .= '    <h2>Create New ' . ucfirst($model) . '</h2>' . "\n";
    $html .= '    <a href="<?= ROOT ?>/admin/' . $model . '" class="btn secondary">Back</a>' . "\n";
    $html .= '  </div>' . "\n";

    $html .= '  <?php if (!empty($errors)): ?>' . "\n";
    $html .= '  <div class="alert alert-danger">' . "\n";
    $html .= '    <ul>' . "\n";
    $html .= '      <?php foreach ($errors as $error): ?>' . "\n";
    $html .= '        <li><?= htmlspecialchars($error) ?></li>' . "\n";
    $html .= '      <?php endforeach; ?>' . "\n";
    $html .= '    </ul>' . "\n";
    $html .= '  </div>' . "\n";
    $html .= '  <?php endif; ?>' . "\n";

    $html .= '  <form method="post" action="<?= ROOT ?>/admin/' . $model . '/store" enctype="multipart/form-data">' . "\n";
    $html .= '    <div class="form-grid">' . "\n";

    foreach ($tableSchema as $column => $type) {
        $html .= generateFormField($column, $type);
    }

    $html .= '    </div>' . "\n";
    $html .= '    <div class="form-actions">' . "\n";
    $html .= '      <button type="submit" class="btn">Create</button>' . "\n";
    $html .= '      <a href="<?= ROOT ?>/admin/' . $model . '" class="btn secondary">Cancel</a>' . "\n";
    $html .= '    </div>' . "\n";
    $html .= '  </form>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}

function generateFormField2($columnName, $columnType, $mode = 'create', $modelName = null)
{
    $label = camelCaseToSentence($columnName);
    $isNullable = strpos($columnType, 'nullable') !== false;
    $hasValue = ($mode === 'edit') ? '<?= $' . $modelName . '->' . $columnName . ' ?? "" ?>' : '';
    
    $field = '';
    $field .= '    <div class="form-group">' . "\n";
    $field .= '      <label for="' . $columnName . '">' . $label . '</label>' . "\n";

    if (strpos($columnType, 'enum:') !== false) {
        preg_match('/enum:([a-zA-Z0-9_,\- ]+)/', $columnType, $matches);
        $options = explode(',', $matches[1]);
        $field .= '      <select id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
        foreach ($options as $option) {
            $field .= '        <option value="' . $option . '" <?= $' . $modelName . '->' . $columnName . ' == "' . $option . '" ? "selected" : "" ?>>' . ucfirst($option) . '</option>' . "\n";
        }
        $field .= '      </select>' . "\n";
    } elseif (preg_match('/tinyint\(1\)|boolean/i', $columnType)) {
        $field .= '      <input type="checkbox" id="' . $columnName . '" name="' . $columnName . '" value="1" <?= $' . $modelName . '->' . $columnName . ' ? "checked" : "" ?>>' . "\n";
    } elseif (preg_match('/text|longtext/i', $columnType)) {
        $field .= '      <textarea id="' . $columnName . '" name="' . $columnName . '" ' . ($isNullable ? '' : 'required') . '><?= $' . $modelName . '->' . $columnName . ' ?? "" ?></textarea>' . "\n";
    } elseif (strpos($columnType, 'file') !== false || stripos($columnName, 'file') !== false || stripos($columnName, 'image') !== false) {
        $field .= '      <input type="file" id="' . $columnName . '" name="' . $columnName . '">' . "\n";
    } elseif (preg_match('/decimal|float|double/i', $columnType)) {
        $field .= '      <input type="number" step="0.01" id="' . $columnName . '" name="' . $columnName . '" value="' . $hasValue . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    } elseif (preg_match('/int|integer/i', $columnType)) {
        $field .= '      <input type="number" id="' . $columnName . '" name="' . $columnName . '" value="' . $hasValue . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    } elseif (preg_match('/date|timestamp/i', $columnType)) {
     $field .= '      <input type="datetime-local" id="' . $columnName . '" name="' . $columnName . '" value="<?= strtotime($' . $modelName . '->' . $columnName . ') ? date("Y-m-d\\TH:i", strtotime($' . $modelName . '->' . $columnName . ')) : "" ?>" ' . ($isNullable ? '' : 'required') . '>' . "\n";

    } else {
        $field .= '      <input type="text" id="' . $columnName . '" name="' . $columnName . '" value="' . $hasValue . '" ' . ($isNullable ? '' : 'required') . '>' . "\n";
    }

    $field .= '    </div>' . "\n";
    return $field;
}
function generateEditForm($tableSchema, $model)
{
    $table = singularize($model);
    $fieldsToRemove = [$table . 'CreatedAt', $table . 'UpdatedAt', $table . 'Identify'];
    $tableSchema = removeFields($tableSchema, $fieldsToRemove);
    array_shift($tableSchema); // Remove primary key

    $html = '<div class="dashboard">' . "\n";
    $html .= '  <div class="top-row">' . "\n";
    $html .= '    <h2>Edit ' . ucfirst($model) . '</h2>' . "\n";
    $html .= '    <a href="<?= ROOT ?>/admin/' . $model . '" class="btn secondary">Back</a>' . "\n";
    $html .= '  </div>' . "\n";

    $html .= '  <?php $' . $model . ' = $params["' . singularize($model) . '"] ?? null; ?>' . "\n";
    $html .= '  <?php if ($' . $model . '): ?>' . "\n";

    $html .= '  <?php if (!empty($errors)): ?>' . "\n";
    $html .= '  <div class="alert alert-danger">' . "\n";
    $html .= '    <ul>' . "\n";
    $html .= '      <?php foreach ($errors as $error): ?>' . "\n";
    $html .= '        <li><?= htmlspecialchars($error) ?></li>' . "\n";
    $html .= '      <?php endforeach; ?>' . "\n";
    $html .= '    </ul>' . "\n";
    $html .= '  </div>' . "\n";
    $html .= '  <?php endif; ?>' . "\n";

    $html .= '  <form method="post" action="<?= ROOT ?>/admin/' . $model . '/<?= $' . $model . '->' . $table . 'Identify ?>/update" enctype="multipart/form-data">' . "\n";
    $html .= '    <div class="form-grid">' . "\n";

    foreach ($tableSchema as $column => $type) {
        $html .= generateFormField2($column, $type, 'edit', $model);
    }

    $html .= '    </div>' . "\n";
    $html .= '    <div class="form-actions">' . "\n";
    $html .= '      <button type="submit" class="btn">Update</button>' . "\n";
    $html .= '      <a href="<?= ROOT ?>/admin/' . $model . '" class="btn secondary">Cancel</a>' . "\n";
    $html .= '    </div>' . "\n";
    $html .= '  </form>' . "\n";

    $html .= '  <?php else: ?>' . "\n";
    $html .= '    <p class="text-danger">Record not found.</p>' . "\n";
    $html .= '  <?php endif; ?>' . "\n";

    $html .= '</div>' . "\n";

    return $html;
}

function generateTableAll($tableSchema, $searchColumns, $model)
{
    $modelVar = strtolower($model);
    $singular = singularize($model);

    $html = '<div class="dashboard">' . "\n";
    $html .= '  <div class="top-row">' . "\n";
    $html .= '    <h2>' . ucfirst($model) . '</h2>' . "\n";
    $html .= '    <div class="action-buttons">' . "\n";
    $html .= '      <button class="btn" onclick="window.location=\'<?= ROOT ?>/admin/' . $model . '/create\'"><i class="uil uil-plus-circle"></i> Create</button>' . "\n";
    $html .= '      <button class="btn secondary" onclick="window.location=\'<?= ROOT ?>/admin/' . $model . '/export\'"><i class="uil uil-export"></i> Export</button>' . "\n";
    $html .= '      <button class="btn secondary" onclick="document.getElementById(\'importFile\').click();"><i class="uil uil-import"></i> Import</button>' . "\n";
    $html .= '      <form action="<?= ROOT ?>/admin/' . $model . '/import" method="post" enctype="multipart/form-data" style="display: none;">' . "\n";
    $html .= '        <input type="file" name="file" id="importFile" onchange="this.form.submit()" />' . "\n";
    $html .= '      </form>' . "\n"; 
    $html .= '    </div>' . "\n";
    $html .= '  </div>' . "\n";

    // New Filter and Sort Form
    $html .= '<div class="filter-sort-row">' . "\n";
    $html .= '<form method="GET" id="filterSortForm" class="filter-sort-form" onchange="this.submit()">' . "\n";

    $html .= '  <label for="filter_status">Location:</label>' . "\n";
    $html .= '  <select name="filter_status" id="filter_status" class="filter-select">' . "\n";
    $html .= '    <option value="active" <?php echo ($_GET[\'filter_status\'] ?? \'\') === \'active\' ? \'selected\' : \'\' ?>>Active</option>' . "\n";
    $html .= '    <option value="inactive" <?php echo ($_GET[\'filter_status\'] ?? \'\') === \'inactive\' ? \'selected\' : \'\' ?>>Inactive</option>' . "\n";
    $html .= '  </select>' . "\n";

    $html .= '  <label for="sort_' . $model . 'Title">Sort:</label>' . "\n";
    $html .= '  <select name="sort_' . $model . 'Title" id="sort_' . $model . 'Title" class="sort-select">' . "\n";
    $html .= '    <option value="">Clear</option>' . "\n";
    $html .= '    <option value="asc" <?php echo ($_GET[\'sort_' . $model . 'CreatedAt\'] ?? \'\') === \'asc\' ? \'selected\' : \'\' ?>>Title A–Z</option>' . "\n";
    $html .= '    <option value="desc" <?php echo ($_GET[\'sort_' . $model . 'CreatedAt\'] ?? \'\') === \'desc\' ? \'selected\' : \'\' ?>>Title Z–A</option>' . "\n";
    $html .= '  </select>' . "\n";

    $html .= '  <?php if (! empty($_GET[\'search\'])): ?>' . "\n";
    $html .= '    <input type="hidden" name="search" value="<?php echo htmlspecialchars($_GET[\'search\'])?>">' . "\n";
    $html .= '  <?php endif; ?>' . "\n";

    $html .= '</form>' . "\n";
    $html .= '</div>' . "\n";

    $html .= '  <div class="table-responsive">' . "\n";
    $html .= '    <table>' . "\n";
    $html .= '      <thead>' . "\n";
    $html .= '        <tr>' . "\n";
    $html .= '          <th><input type="checkbox" onclick="toggleAll(this)" /></th>' . "\n";
    $html .= '          <th>#</th>' . "\n";
    foreach ($searchColumns as $col) {
        $html .= '          <th>' . camelCaseToSentence($col) . '</th>' . "\n";
    }
    $html .= '          <th>Action</th>' . "\n";
    $html .= '        </tr>' . "\n";
    $html .= '      </thead>' . "\n";
    $html .= '      <tbody id="tableBody">' . "\n";

    $html .= '<?php if (!empty($' . $modelVar . ')) : ?>' . "\n";
    $html .= '<?php foreach ($' . $modelVar . ' as $index => $' . $singular . ') : ?>' . "\n";
    $html .= '        <tr>' . "\n";
    $html .= '          <td><input type="checkbox" class="row-check" name="selectedIds[]" value="<?= $' . $singular . '->' . $singular . 'Identify ?>" onchange="toggleTruncateBar()"></td>' . "\n";
    $html .= '          <td><?= $index + 1 ?></td>' . "\n";

    foreach ($searchColumns as $col) {
        $type = $tableSchema[$col] ?? '';
        if (strpos($type, 'file') !== false) {
            $html .= '          <td>' . "\n";
            $html .= '            <?php if (!empty($' . $singular . '->' . $col . ')) : ?>' . "\n";
            $html .= '              <a href="<?= ASSETS ?>/img/uploads/<?= $' . $singular . '->' . $col . ' ?>" target="_blank">View</a>' . "\n";
            $html .= '            <?php else : ?> - <?php endif; ?>' . "\n";
            $html .= '          </td>' . "\n";
        } elseif (strpos($type, 'decimal') !== false) {
            $html .= '          <td><?= isset($' . $singular . '->' . $col . ') ? "$" . number_format($' . $singular . '->' . $col . ', 2) : "-" ?></td>' . "\n";
        } elseif (strpos($type, 'date') !== false || strpos($type, 'timestamp') !== false) {
             $html .= '          <td><?= strtotime($' . $singular . '->' . $col . ') ? date("d M y, H:i", strtotime($' . $singular . '->' . $col . ')) : "-" ?></td>' . "\n";
        }
         else {
            $html .= '          <td><?= isset($' . $singular . '->' . $col . ') ? htmlspecialchars($' . $singular . '->' . $col . ') : "-" ?></td>' . "\n";
        }
    }

    $html .= '          <td>' . "\n";
    $html .= '            <div class="action-menu">' . "\n";
    $html .= '              <span onclick="toggleDropdown(this)">⋯</span>' . "\n";
    $html .= '              <div class="action-dropdown">' . "\n";
    $html .= '                <a href="<?= ROOT ?>/admin/' . $model . '/<?= $' . $singular . '->' . $singular . 'Identify ?>"><i class="uil uil-eye"></i> View</a>' . "\n";
    $html .= '                <a href="<?= ROOT ?>/admin/' . $model . '/<?= $' . $singular . '->' . $singular . 'Identify ?>/edit"><i class="uil uil-edit"></i> Edit</a>' . "\n";
    $html .= '                <a href="<?= ROOT ?>/admin/' . $model . '/<?= $' . $singular . '->' . $singular . 'Identify ?>/delete"><i class="uil uil-trash-alt"></i> Delete</a>' . "\n";
    $html .= '              </div>' . "\n";
    $html .= '            </div>' . "\n";
    $html .= '          </td>' . "\n";
    $html .= '        </tr>' . "\n";
    $html .= '<?php endforeach; ?>' . "\n";
    $html .= '<?php else : ?>' . "\n";
    $html .= '<tr class="no-data-row"><td colspan="' . (count($searchColumns) + 3) . '"><div class="no-data-box"><p class="no-data-message">No ' . $model . ' found.</p><a href="<?= ROOT ?>/admin/' . $model . '/create" class="no-data-action"><i class="uil uil-plus-circle"></i> Create New</a></div></td></tr>' . "\n";
    $html .= '<?php endif; ?>' . "\n";

    $html .= '      </tbody>' . "\n";
    $html .= '    </table>' . "\n";
    $html .= '  </div>' . "\n";

    $html .= '  <div class="pagination"><?= $meta["pagination"] ?? "" ?></div>' . "\n";
    $html .= '</div>' . "\n";

    $html .= '<div class="truncate-bar" id="truncateBar" style="display:none; margin-top: 10px;">' . "\n";
    $html .= '  <button type="button" onclick="truncateSelected()">Truncate Selected</button>' . "\n";
    $html .= '</div>' . "\n";

    $html .= '<div class="pagination-container">' . "\n";
    $html .= '  <?php if (!empty($meta)) { renderPagination($meta); } ?>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}

function generateTable($tableSchema, $searchColumns, $model)
{
    $singular = singularize($model); // e.g., 'event'
    $html = '<div class="dashboard">' . "\n";
    $html .= '  <div class="top-row">' . "\n";
    $html .= '    <h2>' . ucfirst($model) . ' Details</h2>' . "\n";
    $html .= '    <a href="<?= ROOT ?>/admin/' . $model . '" class="btn secondary">Back</a>' . "\n";
    $html .= '  </div>' . "\n\n";

    $html .= '  <?php $' . $singular . ' = $params["' . $singular . '"] ?? null; ?>' . "\n";
    $html .= '  <?php if ($' . $singular . '): ?>' . "\n";
    $html .= '  <div class="detail-layout">' . "\n";
    $html .= '    <div class="detail-data">' . "\n";

    foreach ($searchColumns as $col) {
        $label = camelCaseToSentence($col);
        $type = $tableSchema[$col] ?? '';

        $html .= '      <div class="detail-row">' . "\n";
        $html .= '        <div class="detail-label">' . $label . '</div>' . "\n";

        if (strpos($type, 'file') !== false || stripos($col, 'image') !== false) {
            $html .= '        <div class="detail-value"><?php if (!empty(trim($' . $singular . '->' . $col . '))) : ?>' . "\n";
            $html .= '          <img src="<?= ASSETS ?>/img/uploads/<?= htmlspecialchars(trim($' . $singular . '->' . $col . ')) ?>" alt="Image" class="img-thumb-64">' . "\n";
            $html .= '        <?php else : ?> - <?php endif; ?></div>' . "\n";
        } elseif (strpos($type, 'decimal') !== false) {
            $html .= '        <div class="detail-value"><?= isset($' . $singular . '->' . $col . ') ? "$" . number_format($' . $singular . '->' . $col . ', 2) : "-" ?></div>' . "\n";
        } elseif (strpos($type, 'date') !== false || strpos($type, 'timestamp') !== false) {
            $html .= '        <div class="detail-value"><?= strtotime($' . $singular . '->' . $col . ') ? date("d M y, H:i", strtotime($' . $singular . '->' . $col . ')) : "-" ?></div>' . "\n";
        } else {
            $html .= '        <div class="detail-value"><?= htmlspecialchars($' . $singular . '->' . $col . ' ?? "-") ?></div>' . "\n";
        }

        $html .= '      </div>' . "\n";
    }

    $html .= '    </div>' . "\n";
    $html .= '    <div class="detail-actions">' . "\n";
    $html .= '      <a href="<?= ROOT ?>/admin/' . $model . '/<?= $' . $singular . '->' . $singular . 'Identify ?>/edit" class="action-btn">' . "\n";
    $html .= '        <i class="uil uil-edit"></i> Edit' . "\n";
    $html .= '      </a>' . "\n";
    $html .= '      <a href="<?= ROOT ?>/admin/' . $model . '/<?= $' . $singular . '->' . $singular . 'Identify ?>/delete" class="action-btn">' . "\n";
    $html .= '        <i class="uil uil-trash-alt"></i> Delete' . "\n";
    $html .= '      </a>' . "\n";
    $html .= '    </div>' . "\n";
    $html .= '  </div>' . "\n";
    $html .= '  <?php else: ?>' . "\n";
    $html .= '  <p>No data found.</p>' . "\n";
    $html .= '  <?php endif; ?>' . "\n";
    $html .= '</div>' . "\n";

    return $html;
}


?>
