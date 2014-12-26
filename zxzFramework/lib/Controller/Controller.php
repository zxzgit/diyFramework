<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/25
 * Time: 14:00
 */
namespace lib\Controller;
class Controller{
    public $c;
    public $m;
    static $pramArray = null;

    function  __construct($c, $m)
    {
        //echo "this is Class Controller<br>";
        $this->c = $c;
        $this->m = $m;
    }

    function display()
    {//展示模板页面
        //处理要传到模板中的参数
        if (self::$pramArray!=null) {//如果没有向页面传递参数 则不用执行这一步
            extract(self::$pramArray);
        }

        //echo "this is display<br>";
        //echo "thsi is dispaly echo this->c:" . $this->c . '<br>';
        //echo "thsi is dispaly echo this->c:" . $this->m . '<br>';
        if (file_exists('../View/' . $this->c . '/' . $this->m . '.php')) {
            //echo '<br>标记：'.__DIR__;
            require_once(PATH.'/View/' . $this->c . '/' . $this->m . '.php');//如果模板存在包含相应的模板
        } else {
            echo "can't find this Viewfile";//如果不存在则提示模板文件不存在
        }
    }

    function assign($name, $param)//将传递进来的参数//给模板页面传递参数
    {
        self::$pramArray[$name] = $param;//将准备传递给模板的键值对先存储在$pramArray数组中
        //echo "this is assign<br>";
    }
}