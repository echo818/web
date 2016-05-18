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
<script charset="utf-8" src="/web/Public/Common/kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/web/Public/Common/kindeditor/lang/zh-CN.js"></script>
<div class="edit-win">
    <form action="<?php echo U('Article/doAdd');?>" method="post">
        <div class="edit-row">
            <label for="edit-title">文章标题 </label>
            <input type="text" id="edit-title" name="art_title" placeholder="请输入您的标题">
        </div>
        <div class="edit-row">
            <label>文章类型 </label>
            <div class="edit-type-select">
                <input type="text" id="edit-type" readonly="readonly" name="art_type" placeholder="请选择文章类型">
                <ul id="edit-type-item">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="edit-row">
            <label for="edit-author">作者 </label>
            <input type="text" id="edit-author" name="art_author" placeholder="作者">
        </div>
        <textarea name="art_content" id="editor"></textarea>
        <div class="edit-row">
            <input type="submit" value="发布文章">
        </div>
    </form>
</div>
<script>
$(function() {
    // 文章类型下拉框
    $("#edit-type").on("click", function() {
        if ($("#edit-type-item").css("display") == "none") {
            $("#edit-type-item").show();
        } else {
            $("#edit-type-item").hide();
        }
    });
    $("#edit-type-item li").on("click", function() {
        $("#edit-type").val($(this).text());
        $("#edit-type-item").hide();
    })
});
// 关闭过滤模式，保留所有标签
KindEditor.options.filterMode = false;
KindEditor.ready(function(K) {
    var editor = K.create("#editor", {
        width: '920px',
        height: '400px'
    });
    // 同步数据后可以直接取得textarea的value
    editor.sync();
});
</script>

		</div>
	</main>
	<!-- 底部内容 -->
	<footer>
		
	</footer>
</body>
</html>