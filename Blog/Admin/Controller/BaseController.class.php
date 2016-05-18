<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
		/**
		 * 用户验证
		 */
		if (!session('username')) {
			$this->redirect('Login/login');
		}
	}
}