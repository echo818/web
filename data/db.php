<?php
//连接数据库
$link = mysql_connect('localhost','root','123123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//创建数据库
$sql = 'CREATE DATABASE my_db';
if (mysql_query($sql, $link)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
//设置数据库编码
mysql_query("set names 'utf8'");
//选择数据库
mysql_select_db('my_db');
//读取本地数据库文件内容
$data = file_get_contents(dirname(THINK_PATH).'\data\blog.sql');
$arr = explode(";",$data);
foreach ($arr as $sql) {
    //执行数据操作语句
    $result = mysql_query($sql,$link);
    if(!$result){
        die('Could not query: ' . mysql_error());
    }
}