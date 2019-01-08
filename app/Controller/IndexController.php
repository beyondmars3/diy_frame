<?php
/**
 * Created by PhpStorm.
 * User: lvxiaolong
 * Date: 2019-01-08
 * Time: 17:04
 */

namespace app\Controller;

use app\Template;

class IndexController
{

    const VERSION = 1.0;

    public $template;


    public function login()
    {

        $temlate = new Template(__DIR__ . '/../statis/login.html');

        $temlate->display();

    }

    public function dologin()
    {
        print 'dologin';
    }

}