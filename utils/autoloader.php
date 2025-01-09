<?php

spl_autoload_register(function ($className) {
    $baseDir = __DIR__. '/../src/Entities/';
    $file = $baseDir . str_replace('\\', '/', $className) . '.php';

    var_dump($file);

    if (file_exists($file)) {
        require $file;
    }
});