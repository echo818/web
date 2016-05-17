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
<script charset="utf-8" src="/web/Public/Common/kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/web/Public/Common/kindeditor/lang/zh-CN.js"></script>
<div class="edit-win">
    <form action="<?php echo U('Article/doEdit');?>" method="post">
        <input type="hidden" name="art_id" value="<?php echo ($art["id"]); ?>">
        <div class="edit-row">
            <label for="edit-title">文章标题 </label>
            <input type="text" id="edit-title" name="art_title"  value="<?php echo ($art["title"]); ?>">
        </div>
        <div class="edit-row">
            <label>文章类型 </label>
            <div class="edit-type-select">
                <input type="text" id="edit-type" readonly="readonly" name="art_type" value="<?php echo ($art["type"]); ?>">
                <ul id="edit-type-item">
                    <li>小说</li>
                    <li>散文</li>
                    <li>随记</li>
                    <li>小品文</li>
                    <li>诗歌</li>
                </ul>
            </div>
        </div>
        <div class="edit-row">
            <label for="edit-author">作者 </label>
            <input type="text" id="edit-author" name="art_author" value="<?php echo ($art["author"]); ?>">
        </div>
        <textarea name="art_content" id="editor" value="<?php echo ($art["content"]); ?>"></textarea>
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