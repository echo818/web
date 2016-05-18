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
<div id="view" style="overflow-y:auto;padding:10px 20px 30px;">
	<h1 style="font-size:24px;line-height: 40px;"><?php echo ($art["title"]); ?></h1>
	<div style="font-size:15px;line-height: 32px;color:#888;"><?php echo ($art["author"]); ?>--<?php echo ($art["type"]); ?>--<?php echo (date('Y-m-d H:i',$art["time"])); ?></div>
	<div><?php echo ($art["content"]); ?></div>
</div>
<script>
	var height = $("body").height();
	$("#view").height(height-180);
</script>
		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
</html>