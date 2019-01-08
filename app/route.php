<?php
/**
 * Created by PhpStorm.
 * User: lvxiaolong
 * Date: 2019-01-08
 * Time: 17:00
 */

use app\Controller\IndexController;

return $routes = [
    'login' => [IndexController::class, 'login'],
    'dologin' => [IndexController::class, 'dologin'],
];