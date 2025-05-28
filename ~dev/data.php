<?php
function p($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    exit;
}

require_once './SchemaBuilder.php';
require_once './router.php';
require_once './factory.php';
require_once './view.php';

// 🟩 Menu item generator: defined early
function generateMenuItem($tableName) {
    $menuPath = '../app/views/alpha-theme/@layout/adminMenu.php';
    $menuItems = file_exists($menuPath) ? require $menuPath : [];

    $route = trim($tableName);
    $label = ucwords(preg_replace('/([a-z])([A-Z])/', '$1 $2', $route));
    $icon  = 'uil-file';

    if (!array_key_exists($route, $menuItems)) {
        $menuItems[$route] = [
            'label' => $label,
            'icon'  => $icon
        ];

        file_put_contents($menuPath, '<?php return ' . var_export($menuItems, true) . ';');
        echo "Menu updated!";
    } else {
        echo "Menu item for '{$route}' already exists.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    function addFieldsToJSONFile($table, $json) {
        $table = singularize($table);
        $data = json_decode($json, true);
        $data[$table . 'CreatedAt'] = 'timestamp';
        $data[$table . 'UpdatedAt'] = 'timestamp';
        $data[$table . 'Identify']  = 'string|max:50';
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    $table = $_POST['TABLE'];
    $addFieldsToJSONFile = addFieldsToJSONFile($table, $_POST['JSON']);
    $tableSchema = json_decode($addFieldsToJSONFile, true);

    list($rules, $searchColumns, $fileFields, $specialFields) = parseJsonToDataAndFields($addFieldsToJSONFile);

    // 🟦 Rules + Columns
    function funcRules($rules) {
        return $rules; // raw array for model
    }

    function funcRulesExport($rules) {
        return var_export($rules, true); // for controller
    }

    function funcColumns($searchColumns) {
        return array_slice($searchColumns, 0);
    }

    $getRules        = funcRules($rules);
    $getRulesExport  = funcRulesExport($rules);
    $getColumns      = funcColumns($searchColumns);

    // 🟩 MySQL & View & Controller Creation
    function createMYSQL($tableSchema, $table) {
        $schemaBuilder = new SchemaBuilder();
        $query = $schemaBuilder->createTable($table, $tableSchema);

        file_put_contents("migrations/{$table}.sql", $query);
        file_put_contents("migrations/json/{$table}.json", json_encode($tableSchema, JSON_PRETTY_PRINT));
    }

    function executeMYSQL($table) {
        try {
            $dsn = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
            $pdo = new PDO($dsn, DB_USER, DB_PASS);
            $pdo->exec("set names utf8");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = file_get_contents("migrations/{$table}.sql");
            $pdo->exec($query);
            echo 'SQL file successfully installed';
        } catch (PDOException $e) {
            echo "Installation failed: " . $e->getMessage();
        }
    }

    function createRouter($table) {
        $createRoutes = generateRoutes($table);
        file_put_contents('routers.php', "\n" . implode("\n", $createRoutes) . "\n", FILE_APPEND | LOCK_EX);
        echo "Router Created!";
    }

    function createResource($table) {
        $createRoutes = generateResource($table);
        $routerContents = file_get_contents('../app/routes/web.php');

        foreach ($createRoutes as $route) {
            if (strpos($routerContents, $route) === false) {
                file_put_contents('../app/routes/web.php', "\n" . $route . "\n", FILE_APPEND | LOCK_EX);
            }
        }
        echo "Router Created!";
    }

    function createModelController($table, $getColumns, $getRulesArray, $getRulesString, $fileFields = [], $specialFields = []) {
        createModel($table, $getColumns, $getRulesArray, $specialFields); // array
        createController($table, $getRulesString, $getColumns, $fileFields); // string
        echo "Model & Controller Created!";
    }

    function createMyView($table, $tableSchema, $searchColumns) {
        createView($table, $tableSchema, $searchColumns);
        echo "Views Created!";
    }

    // 🟧 Final Execution
    generateMenuItem($table);
    createMYSQL($tableSchema, $table);
    createRouter($table);
    createResource($table);
    createModelController($table, $getColumns, $getRules, $getRulesExport, $fileFields, $specialFields);
   // createMyView($table, $tableSchema, $searchColumns);
    createMyView($table, $tableSchema, $searchColumns); // ✅


    executeMYSQL($table);
}
