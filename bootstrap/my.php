<?php
/**
 * Created by PhpStorm.
 * User: zouha
 * Date: 2015/11/1
 * Time: 22:53
 */
$host = $_SERVER['HTTP_HOST'];
define('APP_ROOT', dirname(dirname(__FILE__)));
define('JSDIR', '/plugin/js');
define('CSSDIR', '/');

ini_set('include_path',
    APP_ROOT.'/app/services'.PATH_SEPARATOR.
    APP_ROOT.PATH_SEPARATOR.
    ini_get('include_path'));

class Classloader
{
    public static function loader($class)
    {
        $classFile = strtolower($class).'.php';
        if(file_exists($classFile)){
            require_once($classFile);
        }
    }
}

spl_autoload_register(array('Classloader', 'loader'), true, true);


