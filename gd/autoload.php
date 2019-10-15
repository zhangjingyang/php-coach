<?php
spl_autoload_register(function ($class) {
    echo str_replace("\\", "/", $class) . '.php';
    die;
});
