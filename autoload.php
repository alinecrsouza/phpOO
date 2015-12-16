<?php

define ('CLASS_DIR', __DIR__ . "/src/");
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//No linux
//spl_autoload_register(function ($class) { require_once(str_replace('\\', '/', $class . '.php')); });
//No windows
spl_autoload_register();