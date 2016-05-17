<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function index(){
		$this->show('你好');
	}

    /**
     * 文章列表页面
     */
    public function show(){
    	$Article = M('Article');
        $count = $Article->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(5)
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('theme','%UP_PAGE% %LINK_PAGE% %DOWN_PAGE%');

        $show = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $Article->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    /**
     * 添加文章页面
     */
    public function add(){
        $Type = M('Type');
        $list = $Type->select();
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加文章操作
     */
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

    /**
     * 修改文章页面
     */
    public function edit(){
    	$Article = M('Article');
    	$id = $_GET['id'];
		$art = $Article->where('id='.$id)->find();
    	$this->assign('art',$art);
        $Type = M('Type');
        $list = $Type->select();
        $this->assign('list',$list);
    	$this->display();
    }

    /**
     * 修改文章操作
     */
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
    		$this->error('文章更新失败,请重新更新',U('Article/edit',array('id'=>$id)),3);
    	}
    }

    /**
     * 删除文章操作
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
     * 类型列表页面
     */
    public function type(){
        $Type = M('Type');
        $list = $Type->select();
        $this->assign('list',$list);
        $this->display();
    }

    /**
     * 添加类型页面
     */
    public function addType(){
        $this->display();
    }

    /**
     * 添加类型操作
     */
    public function doType(){
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
     * 修改类型页面
     */
    public function editType(){
        $Type = M('Type');
        $id = $_GET['id'];
        $style = $Type->where('id='.$id)->find();
        $this->assign('type',$style);
        $this->display();
    }

    /**
     * 修改类型操作
     */
    public function updateType(){
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
     * 删除类型操作
     */
    public function deleteType(){
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
     * 预览文章
     */
    public function view(){
        $Article = M('Article');
        $id = $_GET['id'];
        $art = $Article->where('id='.$id)->find();
        $this->assign('art',$art);
        $this->display();
    }
}