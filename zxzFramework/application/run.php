<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/25
 * Time: 15:18
 */
if (isset($_GET['c']) & isset($_GET['m'])) {
    $get_c = $_GET['c'];
    $get_m = $_GET['m'];

    $controllerName = '\\Controller\\' . $get_c . 'Controller';
    $controller = new $controllerName($get_c, $get_m);//建立传过来的c值，建立一个相应的对象
    $controller->$get_m();
}else{
    echo "您查找的页面不存在";
}