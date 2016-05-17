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
		<section>亱語的博客</section>
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
					<button>文章管理</button>
					<ul>
						<li><a>文章列表</a></li>
						<li><a>文章分类</a></li>
						<li><a>文章详情</a></li>
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
<div class="edit-win">
    <form action="<?php echo U('Article/doType');?>" method="post">
        <div class="edit-row">
            <label for="art-type">文章类型 </label>
            <input type="text" id="art-type" name="art_type" placeholder="请输入文章类型">
        </div>
        <div class="edit-row">
            <input type="submit" value="添加类型">
        </div>
    </form>
</div>

		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
</html>