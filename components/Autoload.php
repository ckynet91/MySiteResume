<?php
function __autoload($className){

    $arrayPaths = [
                    '/models/',
                    '/components/'
    ];

    foreach ($arrayPaths as $path) {
        $path = ROOT . $path . $className . '.php';
        if(is_file($path))
            require_once $path;
    }
}