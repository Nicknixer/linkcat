<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Каталог сайтов | <?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/libs/style.css">
</head>
<body>

	<nav>
		<ul>
			<li><a href="/">ГЛАВНАЯ</a></li>
			<li><a href="/">ОБРАТНАЯ СВЯЗЬ</a></li>
			<li><a href="/">РЕКЛАМА</a></li>
			<li><a href="/add"><span class="add-site">ДОБАВИТЬ САЙТ</span></a></li>
			<div class="search"><input type="search" name="search" id="searcher" placeholder="Поиск по сайту"/><input id="find" type="button" name="search" value="Найти"></div>
		</ul>

	</nav>
	<div class="content">
	<div class="title-top"><h1><a href="/">Каталог сайтов</a> - <?php echo $title; ?></h1></div>
		<?php
		if($show_admin_side_bar) get_admin_sidebar();
		if(!$show_admin_side_bar) get_sidebar();
		?>
	<div class="page">