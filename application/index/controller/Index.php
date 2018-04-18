<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $a=["dd"=>100,"tr"=>102];
        $this->assign('list',$a);
        return $this->fetch('index');  
    }

    public function hello($name='linke')
    {
        $this->assign('name',$name);
        return $this->fetch('hello');
    }
}
