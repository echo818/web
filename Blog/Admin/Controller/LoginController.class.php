<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
     * 后台登陆页面
     */
    public function login(){
    	$this->display();
    }

    /**
     * 后台登陆操作
     */
    public function doLogin(){
    	$User = M('User');
    	$name = $_POST['username'];
    	$pass = md5($_POST['password']);
    	$result = $User->where('username="'.$name.'" and password="'.$pass.'"')->find();
    	if($result != null){
    		session('username',$name);
    		$this->redirect('Article/show');
    	}else{
			$this->redirect('Login/login');
    	}
    }

    /**
     * 注销操作
     */
    public function logout(){
        session('username',null);
    	$this->redirect('Login/login');
    }
}