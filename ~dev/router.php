<?php

function generateRoutes($routePrefix, $methodPrefix = null)
{
    $methodPrefix = $methodPrefix ?? singularize($routePrefix);
    $controller   = ucfirst($methodPrefix) . 'Controller';
    $app          = '$app';
    $identify     = $methodPrefix . 'Identify';

    return [
        "// {$routePrefix} routes",
        "{$app}->router->get('/admin/{$routePrefix}', [{$controller}::class, '{$methodPrefix}Index']);",
        "{$app}->router->get('/admin/{$routePrefix}/create', [{$controller}::class, '{$methodPrefix}Create']);",
        "{$app}->router->post('/admin/{$routePrefix}/store', [{$controller}::class, '{$methodPrefix}Store']);",
        "{$app}->router->get('/admin/{$routePrefix}/export', [{$controller}::class, '{$methodPrefix}Export']);",
        "{$app}->router->post('/admin/{$routePrefix}/import', [{$controller}::class, '{$methodPrefix}Import']);",
        "{$app}->router->get('/admin/{$routePrefix}/{{$identify}}/edit', [{$controller}::class, '{$methodPrefix}Edit']);",
        "{$app}->router->post('/admin/{$routePrefix}/{{$identify}}/update', [{$controller}::class, '{$methodPrefix}Update']);",
        "{$app}->router->get('/admin/{$routePrefix}/{{$identify}}', [{$controller}::class, '{$methodPrefix}Show']);",
        "{$app}->router->post('/admin/{$routePrefix}/{{$identify}}/delete', [{$controller}::class, '{$methodPrefix}Destroy']);"
    ];
}


function generateResource($routePrefix, $methodPrefix = null, $controllerClass = null)
{
    $methodPrefix   = $methodPrefix ?? singularize($routePrefix);
    $controllerName = $controllerClass ?? ucfirst($methodPrefix) . 'Controller';
    $app            = '$app';

    return [
        "{$app}->router->resource('admin/{$routePrefix}', '{$methodPrefix}', {$controllerName}::class);"
    ];
}

function removeFields(array $schema, array $fieldsToRemove): array {
    foreach ($fieldsToRemove as $field) {
        unset($schema[$field]);
    }
    return $schema;
}

function removeThree($array) {
    // remove first element
    array_shift($array);
     
    // remove last two elements
    array_pop($array);
    array_pop($array);
    
    return $array;
}

// Camel Case To Sentente Case Function
function camelCaseToSentence($camelCase) {
    $sentence = preg_replace('/(?<!\ )[A-Z]/', ' $0', $camelCase);
    $sentence = ucfirst($sentence);
    return $sentence;
  }
  


function singularize($word) {
    $singular = array (
        '/(quiz)zes$/i' => '\\1',
        '/(matr)ices$/i' => '\\1ix',
        '/(vert|ind)ices$/i' => '\\1ex',
        '/^(ox)en/i' => '\\1',
        '/(alias|status)es$/i' => '\\1',
        '/([octop|vir])i$/i' => '\\1us',
        '/(cris|ax|test)es$/i' => '\\1is',
        '/(shoe)s$/i' => '\\1',
        '/(o)es$/i' => '\\1',
        '/(bus)es$/i' => '\\1',
        '/([m|l])ice$/i' => '\\1ouse',
        '/(x|ch|ss|sh)es$/i' => '\\1',
        '/(m)ovies$/i' => '\\1ovie',
        '/(s)eries$/i' => '\\1eries',
        '/([^aeiouy]|qu)ies$/i' => '\\1y',
        '/([lr])ves$/i' => '\\1f',
        '/(tive)s$/i' => '\\1',
        '/(hive)s$/i' => '\\1',
        '/([^f])ves$/i' => '\\1fe',
        '/(^analy)ses$/i' => '\\1sis',
        '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
        '/([ti])a$/i' => '\\1um',
        '/(n)ews$/i' => '\\1ews',
        '/s$/i' => ''
    );

    $uncountable = array('equipment', 'information', 'rice', 'money', 'species', 'series', 'fish', 'sheep');

    $irregular = array(
        'person' => 'people',
        'man' => 'men',
        'child' => 'children',
        'sex' => 'sexes',
        'move' => 'moves'
    );

    $lowercasedWord = strtolower($word);

    foreach ($uncountable as $uncountableWord) {
        if (substr($lowercasedWord, (-1 * strlen($uncountableWord))) == $uncountableWord) {
            return $word;
        }
    }

    foreach ($irregular as $singularWord => $pluralWord) {
        if (preg_match('/('.$pluralWord.')$/i', $word, $arr)) {
            return preg_replace('/('.$pluralWord.')$/i', substr($arr[0],0,1).substr($singularWord,1), $word);
        }
    }

    foreach ($singular as $rule => $replacement) {
        if (preg_match($rule, $word)) {
            return preg_replace($rule, $replacement, $word);
        }
    }

    return $word;
}



