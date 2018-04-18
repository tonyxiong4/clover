<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $aaa="I am madao";
        $this->assign("ddd",$aaa);
        return $this->fetch('index');  
    }

    public function hello($name='linke')
    {
        $this->assign('name',$name);
        return $this->fetch('hello');
    }
}
