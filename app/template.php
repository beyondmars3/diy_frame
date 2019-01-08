<?php
/**
 * Created by PhpStorm.
 * User: lvxiaolong
 * Date: 2019-01-08
 * Time: 22:12
 */

namespace app;

class Template
{
    public $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function display()
    {

        if (is_file($this->file)) {

            include $this->file;
        } else {
            print 'not found';
        }
    }
}