<?php
namespace Admin\Controller;
class UserController extends BaseController {
    /**
     * 用户列表页面
     */
    public function show(){
        $User = M('User');
        $list = $User->select();
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加用户页面
     */
    public function add(){
        $this->display();
    }

    /**
     * 添加用户操作
     */
    public function doAdd(){
    	$User = M('User');
    	$data['username'] = $_POST['username'];
    	$data['password'] = md5($_POST['password']);
    	$data['time'] = time();
        $data['ip'] = get_client_ip();
    	$result = $User->add($data);
    	if ($result) {
    		$this->success('添加用户成功',U('User/show'),2);
    	}else{
    		$this->error('添加用户失败,请重新添加',U('User/add'),3);
    	}
    }

    /**
     * 修改用户页面
     */
    public function edit(){
    	$User = M('User');
    	$id = $_GET['id'];
		$per = $User->where('id='.$id)->find();
    	$this->assign('per',$per);
    	$this->display();
    }

    /**
     * 修改用户操作
     */
    public function doEdit(){
    	$User = M('User');
    	$id = $_POST['id'];
    	$data['username'] = $_POST['username'];
        $password = $User->where('id='.$id)->getField('password');
        if($password==$_POST['password']){
            $data['password'] = $_POST['password'];
        }else{
            $data['password'] = md5($_POST['password']);
        }
    	$data['time'] = time();
    	$data['ip'] = get_client_ip();
    	$result = $User->where('id='.$id)->save($data);
    	if ($result) {
    		$this->success('修改用户成功',U('User/show'),2);
    	}else{
    		$this->error('修改用户失败,请重新修改',U('User/edit',array('id'=>$id)),3);
    	}
    }

    /**
     * 删除用户操作
     */
    public function delete(){
        $id = $_GET['id'];
        $User = M('User');
        $result = $User->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除用户成功',U('User/show'),2);
        }else{
            $this->error('删除用户失败,请重新删除',U('User/show'),3);
        }
    }

    /**
     * 角色列表页面
     */
    public function role(){
        $Role = M('Role');
        $list = $Role->select();
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加角色页面
     */
    public function addRole(){
        $this->display();
    }

    /**
     * 添加角色操作
     */
    public function doRole(){
        $Role = M('Role');
        $data['name'] = $_POST['rolename'];
        $result = $Role->add($data);
        if ($result) {
            $this->success('角色添加成功',U('User/role'),2);
        }else{
            $this->error('角色添加失败,请重新添加',U('User/addRole'),3);
        }
    }

    /**
     * 修改角色页面
     */
    public function editRole(){
        $Role = M('Role');
        $id = $_GET['id'];
        $style = $Role->where('id='.$id)->find();
        $this->assign('role',$style);
        $this->display();
    }

    /**
     * 修改角色操作
     */
    public function updateRole(){
        $Role = M('Role');
        $id = $_POST['role_id'];
        $data['name'] = $_POST['role_name'];
        $result = $Role->where('id='.$id)->save($data);
        if ($result) {
            $this->success('角色修改成功',U('User/role'),2);
        }else{
            $this->error('角色修改失败,请重新更新',U('User/editRole',array('id'=>$id)),3);
        }
    }

    /**
     * 删除角色操作
     */
    public function deleteRole(){
        $id = $_GET['id'];
        $Role = M('Role');
        $result = $Role->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除角色成功',U('User/role'),2);
        }else{
            $this->error('删除角色失败,请重新删除',U('User/role'),3);
        }
    }

    /**
     * 权限列表页面
     */
    public function auth(){
        $Auth = M('Auth');
        $list = $Auth->select();
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加权限页面
     */
    public function addAuth(){
        $this->display();
    }

    /**
     * 添加权限操作
     */
    public function doAuth(){
        $Auth = M('Auth');
        $data['name'] = $_POST['auth_name'];
        $data['path'] = $_POST['auth_path'];
        $result = $Auth->add($data);
        if ($result) {
            $this->success('权限添加成功',U('User/auth'),2);
        }else{
            $this->error('权限添加失败,请重新添加',U('User/addAuth'),3);
        }
    }

    /**
     * 修改权限页面
     */
    public function editAuth(){
        $Auth = M('Auth');
        $id = $_GET['id'];
        $style = $Auth->where('id='.$id)->find();
        $this->assign('auth',$style);
        $this->display();
    }

    /**
     * 修改权限操作
     */
    public function updateAuth(){
        $Auth = M('Auth');
        $id = $_POST['auth_id'];
        $data['name'] = $_POST['auth_name'];
        $data['path'] = $_POST['auth_path'];
        $result = $Auth->where('id='.$id)->save($data);
        if ($result) {
            $this->success('权限修改成功',U('User/auth'),2);
        }else{
            $this->error('权限修改失败,请重新更新',U('User/editAuth',array('id'=>$id)),3);
        }
    }

    /**
     * 删除权限操作
     */
    public function deleteAuth(){
        $id = $_GET['id'];
        $Auth = M('Auth');
        $result = $Auth->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除权限成功',U('User/auth'),2);
        }else{
            $this->error('删除权限失败,请重新删除',U('User/auth'),3);
        }
    }
}