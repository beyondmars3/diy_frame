<?php
/**
 * Created by PhpStorm.
 * User: lvxiaolong
 * Date: 2019-01-08
 * Time: 17:12
 */


// autoload

require_once '../vendor/autoload.php';
require_once '../app/base.php';
require_once '../app/route.php';

use app\Controller\IndexController;
use app\Base;

//$app = new IndexController();
//$app -> login();

$params = trim($_SERVER['REQUEST_URI'], '/');

$class_name = '';
$method_name = '';

foreach ($routes as $k => $v) {
    if (preg_match('/' . $params . '/', $k)) {

        $class_name = $v[0];
        $method_name = $v[1];
        break;
    }
}


//print '$class_name is ' . $class_name . '<br/>';
//print '$method_name is ' . $method_name . '<br/>';


//var_dump(preg_match('/login/', 'login'));


$app = new Base($class_name, $method_name);
$app->run();