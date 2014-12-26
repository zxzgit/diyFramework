<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2014/12/25
 * Time: 14:02
 */
namespace Controller;
use lib\Controller\Controller;
class IndexController extends Controller{
    function index(){
        //echo "this is index in IndexController<br>";
        //传递参数给模板页面
        $this->assign('zxz','zxzValue');
        //执行模板
        $this->display();
    }
    function add(){
        //echo "this is add method in IndexController<br>";
        $this->assign('ck','ckValue');
        $this->display();
    }
    function del(){
        $this->assign('del','this is del');
        $this->display();
    }
}