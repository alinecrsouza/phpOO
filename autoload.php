<?php

define ('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//spl_autoload_register(function ($class) { require_once(str_replace('\\', '/', $class . '.php')); });
spl_autoload_register();