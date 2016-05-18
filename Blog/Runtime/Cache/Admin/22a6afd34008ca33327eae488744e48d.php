<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
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
		<section>亱語的博客<span><a href="<?php echo U('Index/index');?>">后台管理</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Index/logout');?>">注销</a></span></section>
	</header>
<main>
    <div class="wrapper">
        <div class="login">
            <form action="<?php echo U('Index/doLogin');?>" method="post">
                <div class="edit-row">
                    <label for="login-name">用户名 </label>
                    <input type="text" id="login-name" name="username" placeholder="请输入用户名">
                </div>
                <div class="edit-row">
                    <label for="login-pass">密码 </label>
                    <input type="password" id="login-pass" name="password" placeholder="请输入密码">
                </div>
                <div class="edit-row">
                    <input type="submit" value="登录">
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