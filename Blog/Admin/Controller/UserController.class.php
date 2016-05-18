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
        $Article = M('Article');
        $result = $Article->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除文章成功',U('Article/show'),2);
        }else{
            $this->error('删除文章失败,请重新删除',U('Article/show'),3);
        }
    }

    /**
     * 角色列表页面
     */
    public function role(){
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
        $Type = M('Type');
        $data['name'] = $_POST['art_type'];
        $result = $Type->add($data);
        if ($result) {
            $this->success('类型添加成功',U('Article/type'),2);
        }else{
            $this->error('类型添加失败,请重新添加',U('Article/addType'),3);
        }
    }

    /**
     * 修改角色页面
     */
    public function editRole(){
        $Type = M('Type');
        $id = $_GET['id'];
        $style = $Type->where('id='.$id)->find();
        $this->assign('type',$style);
        $this->display();
    }

    /**
     * 修改角色操作
     */
    public function updateRole(){
        $Type = M('Type');
        $id = $_POST['type_id'];
        $data['name'] = $_POST['type_name'];
        $result = $Type->where('id='.$id)->save($data);
        if ($result) {
            $this->success('类型更新成功',U('Article/type'),2);
        }else{
            $this->error('类型更新失败,请重新更新',U('Article/editType',array('id'=>$id)),3);
        }
    }

    /**
     * 删除角色操作
     */
    public function deleteRole(){
        $id = $_GET['id'];
        $Type = M('Type');
        $result = $Type->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除类型成功',U('Article/type'),2);
        }else{
            $this->error('删除类型失败,请重新删除',U('Article/type'),3);
        }
    }

    /**
     * 权限列表页面
     */
    public function auth(){
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
        $Type = M('Type');
        $data['name'] = $_POST['art_type'];
        $result = $Type->add($data);
        if ($result) {
            $this->success('类型添加成功',U('Article/type'),2);
        }else{
            $this->error('类型添加失败,请重新添加',U('Article/addType'),3);
        }
    }

    /**
     * 修改权限页面
     */
    public function editAuth(){
        $Type = M('Type');
        $id = $_GET['id'];
        $style = $Type->where('id='.$id)->find();
        $this->assign('type',$style);
        $this->display();
    }

    /**
     * 修改权限操作
     */
    public function updateAuth(){
        $Type = M('Type');
        $id = $_POST['type_id'];
        $data['name'] = $_POST['type_name'];
        $result = $Type->where('id='.$id)->save($data);
        if ($result) {
            $this->success('类型更新成功',U('Article/type'),2);
        }else{
            $this->error('类型更新失败,请重新更新',U('Article/editType',array('id'=>$id)),3);
        }
    }

    /**
     * 删除权限操作
     */
    public function deleteAuth(){
        $id = $_GET['id'];
        $Type = M('Type');
        $result = $Type->where('id='.$id)->delete();
        if ($result) {
            $this->success('删除类型成功',U('Article/type'),2);
        }else{
            $this->error('删除类型失败,请重新删除',U('Article/type'),3);
        }
    }
}