<?php
namespace Admin\Controller;
use Think\Controller;


class AdminController extends CommonController {
    
    /**
     * 退出处理
     */
    public function logout() {
        session('username',null);
        session_destroy();
     	$this->success('退出成功',U('Index/index'));
  	
  	}

    /**
	 * 登陆处理
	*/
    public function login(){
    	$m = M('admin');

		$rule=array(
            array('username','require','请输入姓名',1),//必须验证name
            array('password','require','请输入密码',1),//必须验证name
        );


 		if(!$m->field('username,password')->validate($rule)->create())
            $this->error($m->getError());

        $map["username"] = I('post.username');
        $map["password"] = md5(I('post.password','','md5'));

   		$user = $m->where($map)->select(); 

        if(!$user)
            $this->error('用户名，密码错误');
        else 
            session('username',$map['username']);

        $this->redirect('Index/index');
	
	}
    
    /**
	 * 修改密码
	*/
	public function changepass(){

		$rule=array(
            array('oldpass','require','旧密码为空',1),
            array('password','require','新密码为空',1),
            array('password2','require','新密码为空',1),
            array('password','password2','两次密码不一致',0,'confirm'),
        );

        $m = M('Login');

   		if(!$m->field('oldpass,password,password2')->validate($rule)->create())
        	$this->error($m->getError());

		$map["password"] = md5(I('post.oldpass','','md5'));
       	$map["username"] = session('username');

       	$data["password"] = md5(I('post.password','','md5'));
       	$where["username"] = session('username');
		
		$user = $m->where($map)->select(); 

		if(!$user)
       		$this->error('旧密码输入错误');
        else
        	$m->where($where)->save($data);

        $this->success('修改密码成功');

	} 

	/**
	 * 注册处理
	 */
	public function register(){
        $rule=array(
            array('username','require','请输入姓名',1),//必须验证name
            array('username','','用户名已经存在！',0,'unique',1),
            array('password','require','请输入密码',1),//必须验证name
            array('rpassword','require','请输入密码',1),//必须验证name
            array('password','rpassword','两次密码不一致',0,'confirm'),
        );
 
        $m = M('Login');
 
       	if(!$m->field('username,password,rpassword')->validate($rule)->create())
            $this->error($m->getError());

        $map["username"] = I('post.username');
        $map["password"] = I('post.password','','md5');


        if(!$m->add($map))
            $this->error('存入数据库错误');
        else 
            session('username',$map['username']);
        $this->checkauth();
       
    }


}