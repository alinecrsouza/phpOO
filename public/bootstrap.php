<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//ini_set("log_errors", 1);
//ini_set("error_log", "../errors.log");
date_default_timezone_set('America/Sao_Paulo');


define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(__DIR__ .DS. '..'));

$composerAutoload = APP_ROOT . DS . 'vendor' . DS . 'autoload.php';
if (! include($composerAutoload)) {
    set_include_path(implode(PATH_SEPARATOR, array(
        __DIR__ . '/../src',
        get_include_path(),
    )));
    spl_autoload_register(
        function($className){
            $fileName = strtr($className, '\\', DIRECTORY_SEPARATOR ). '.php';
            foreach (explode(PATH_SEPARATOR, get_include_path()) as $path){
                $path .= DIRECTORY_SEPARATOR . $fileName;
                if (is_file($path)) {
                    require_once $path;
                    return true;
                }
            }
            return false;
        }


    );
}