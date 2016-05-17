<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function index(){
		$this->show('你好');
	}

    public function show(){
    	$Article = M('Article');
    	$list = $Article->select();
    	$this->assign('list',$list);
        $this->display();
    }

    public function add(){
        $this->display();
    }

    public function doAdd(){
    	$Article = M('Article');
    	$data['title'] = $_POST['art_title'];
    	$data['type'] = $_POST['art_type'];
    	$data['author'] = $_POST['art_author'];
    	$data['content'] = $_POST['art_content'];
    	$data['time'] = time();
    	$result = $Article->add($data);
    	if ($result) {
    		$this->success('添加文章成功',U('Article/show'),2);
    	}else{
    		$this->error('添加文章失败,请重新添加',U('Article/add'),3);
    	}
    }

    public function edit(){
    	$Article = M('Article');
    	$id = $_GET['id'];
		$art = $Article->where('id='.$id)->find();
    	$this->assign('art',$art);
    	$this->display();
    }

    public function doEdit(){
    	$Article = M('Article');
    	$id = $_POST['art_id'];
    	$data['title'] = $_POST['art_title'];
    	$data['type'] = $_POST['art_type'];
    	$data['author'] = $_POST['art_author'];
    	$data['content'] = $_POST['art_content'];
    	$data['time'] = time();
    	$result = $Article->where('id='.$id)->save($data);
    	if ($result) {
    		$this->success('文章更新成功',U('Article/show'),2);
    	}else{
    		$this->error('文章更新失败,请重新添加',U('Article/edit'),3);
    	}
    }

    public function view(){
    	echo $_GET['id'];
    }

    public function delete(){
    	echo $_GET['id'];
    }
}