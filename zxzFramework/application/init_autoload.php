<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/25
 * Time: 15:13
 */
function __autoload($classname){
    //echo '这是$classname:'.$classname.'<br>';
    //echo "<br>标：".__DIR__;
    require_once(dirname(__DIR__)."/".$classname.'.php');
}