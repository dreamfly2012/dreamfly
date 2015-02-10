<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	
	/**
     * 授权机制，检验用户session.不存在禁止访问
     */
    protected function auth(){
    	if(!is_null(session('username'))){
    		return true;
    	} else {
    		return false;
    	}
    }
	
}