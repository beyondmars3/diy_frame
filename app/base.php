<?php
/**
 * Created by PhpStorm.
 * User: lvxiaolong
 * Date: 2019-01-08
 * Time: 22:31
 */

namespace app;

class Base
{
    private $class_name;
    private $method_name;

    public function __construct($class_name, $method_name)
    {
        $this->class_name = $class_name;
        $this->method_name = $method_name;
    }

    public function run()
    {

        print 'class_name is ' . $this->class_name . '<br/>';
        print 'method_name is ' . $this->method_name . '<br/>';

//        $reflectionMethod = new ReflectionMethod($this -> class_name, $this -> method_name);
//        $reflectionMethod->invoke();

        call_user_func(array($this->class_name, $this->method_name));
    }
}