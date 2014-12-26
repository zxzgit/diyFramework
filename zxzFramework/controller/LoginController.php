<?php

namespace Controller;
use lib\Controller\Controller;
class LoginController extends Controller{
    function index(){
        //传递参数给模板页面
        $this->assign('zxz','zxzValue');
        //执行模板
        $this->display();
    }
    function add(){
        $this->assign('ck','ckValue');
        $this->display();
    }
    function del(){
        echo "<br>";
        $this->assign('del','this is del');
        $this->display();
    }
}
