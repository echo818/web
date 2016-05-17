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
		$("nav>ul>li>ul>li").on("click",function(){
			$("nav>ul>li>ul>li.nav-current").removeClass("nav-current");
			$(this).addClass("nav-current");
		});
	});
</script>
			<table class="article-table">
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>作者</th>
					<th>发布时间</th>
					<th>操作</th>
				</tr>
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td>
							<div class="article-list-tile"><?php echo ($vo["title"]); ?></div>
						</td>
						<td><?php echo ($vo["author"]); ?></td>
						<td><?php echo (date('Y-m-d H:i',$vo["time"])); ?></td>
						<td>
							<a>编辑</a>
							<a>查看</a>
							<a>删除</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	
		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
</html>