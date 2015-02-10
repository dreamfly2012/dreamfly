<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {
    public function index(){
        if($this->auth()){
            $this->display('dash');
        }else{
            $this->display('login');
        }
    }

    public function edit(){
        if($this->auth()){
            $this->display('edit');
        }else{
            $this->display('login');
        }
    }

    public function register(){
        $this->display('register');
    }

    public function changepass(){
        if($this->auth()){
            $this->display('changepass');
        } else{
            $this->display('Index/index');
        }
    }
}