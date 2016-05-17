<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理</title>
	<link rel="stylesheet" type="text/css" href="./css/base.css?v=1.0.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=1.0.0">
	<script type="text/javascript" src="./js/jquery-1.11.2.min.js?v=1.0.0"></script>
	<script type="text/javascript" src="./js/script.js"></script>
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
						<li class="nav-current"><a>文章列表</a></li>
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
			<table class="article-table">
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>作者</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>事实证明：内部有一批周永康蒋洁敏廖永远的人</td>
					<td>长安街知事</td>
					<td>2016-5-16 23:31</td>
					<td>
						<a>编辑</a>
						<a>查看</a>
						<a>删除</a>
					</td>
				</tr>
			</table>
		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
<script>
	$(function(){
		$("nav>ul>li>ul>li").on("click",function(){
			$("nav>ul>li>ul>li.nav-current").removeClass("nav-current");
			$(this).addClass("nav-current");
		});
	});
</script>
</html>