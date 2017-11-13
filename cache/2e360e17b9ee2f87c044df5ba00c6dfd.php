<?php if(!defined("TOKEN")){
	header("HTTP/1.1 403 Forbidden");
	exit("Access Forbidden");
} ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>社团网站_后台管理</title>
<link rel="stylesheet" type="text/css" href="./css/admin/admin.css">
<script src="jq/jquery-3.2.1.js"></script>
</head>

<body>
<div class="container">
	<nav>
		<ul>
			<li><a href="?ctrl=admin">封面</a></li>
			<li><a href="?ctrl=admin&act=basic">基本设置</a></li>
			<li><a href="?ctrl=admin&act=user">用户管理</a></li>
			<li><a href="?ctrl=admin&act=article">文章管理</a></li>
			<li><a href="?ctrl=admin&act=image">图片管理</a></li>
			<li><a href="?ctrl=admin&act=team">团队管理</a></li>
			<li><a href="#">小贴士管理</a></li>
		</ul>
	</nav>
	<article>
