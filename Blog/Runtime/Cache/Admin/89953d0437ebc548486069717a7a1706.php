<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理</title>
	<link rel="stylesheet" type="text/css" href="/web/Public/Common/css/base.css?v=1.0.0">
	<link rel="stylesheet" type="text/css" href="/web/Public/Admin/css/style.css?v=1.0.0">
	<script type="text/javascript" src="/web/Public/Common/js/jquery-1.11.2.min.js?v=1.0.0"></script>
</head>
<body>
	<!-- 头部内容 -->
	<header>
		<section>亱語的博客<span><a href="<?php echo U('Index/index');?>">后台管理</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Login/logout');?>">注销</a></span></section>
	</header>
<!-- 主体内容 -->
	<main>
		<!-- 左侧导航内容 -->
		<nav class="fl">
			<ul>
				<li>
					<button>文章管理</button>
					<ul>
						<li><a href="<?php echo U('Article/show');?>">文章列表</a></li>
						<li><a href="<?php echo U('Article/add');?>">添加文章</a></li>
						<li><a href="<?php echo U('Article/type');?>">文章分类</a></li>
						<li><a href="<?php echo U('Article/addType');?>">添加类型</a></li>
					</ul>
				</li>
				<li>
					<button>用户管理</button>
					<ul>
						<li><a href="<?php echo U('User/show');?>">用户列表</a></li>
						<li><a href="<?php echo U('User/add');?>">添加用户</a></li>
						<li><a href="<?php echo U('User/role');?>">角色列表</a></li>
						<li><a href="<?php echo U('User/addRole');?>">添加角色</a></li>
						<li><a href="<?php echo U('User/auth');?>">权限列表</a></li>
						<li><a href="<?php echo U('User/addAuth');?>">添加权限</a></li>
					</ul>
				</li>
				<li>
					<button>文章管理</button>
					<ul>
						<li><a>文章列表</a></li>
						<li><a>文章分类</a></li>
						<li><a>文章详情</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- 右侧正文内容 -->
		<div class="wrapper fr">

<script>
	$(function(){
		var pathname = document.location.href;
		$("nav>ul>li>ul>li").each(function(){
			var url = $(this).children("a").attr("href");
			if (pathname.indexOf(url) != -1) {
				$(this).addClass("nav-current");
			}
		});
		// $("nav>ul>li>ul>li").on("click",function(){
		// 	$("nav>ul>li>ul>li.nav-current").removeClass("nav-current");
		// 	$(this).addClass("nav-current");
		// });
	});
</script>
			<table class="article-table">
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>类型</th>
					<th>作者</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td>
							<div class="article-list-tile"><?php echo ($vo["title"]); ?></div>
						</td>
						<td><?php echo ($vo["type"]); ?></td>
						<td><?php echo ($vo["author"]); ?></td>
						<td><?php echo (date('Y-m-d H:i',$vo["time"])); ?></td>
						<td>
							<a href="<?php echo U('Article/edit',array('id'=>$vo['id']));?>">编辑</a>
							<a href="<?php echo U('Article/view',array('id'=>$vo['id']));?>">预览</a>
							<a href="<?php echo U('Article/delete',array('id'=>$vo['id']));?>">删除</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<div class="article-page"><?php echo ($page); ?></div>
	
		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
</html>