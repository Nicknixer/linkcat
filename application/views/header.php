<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
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
	<div class="title-top"><h1><?php echo $title; ?></h1></div>
	<div class="left-side-bar">
		<div class="left-side-menu">Категории</div>
		<?php foreach ($cats as $cat) {
			echo '<div class="left-side-items"><a href="/cat/show/'.$cat['id'].'">'.$cat['name'].'</a> ('.$cat['count'].')</div>';
		} ?>
		<div class="left-side-menu">Статистика</div>
		<div class="left-side-items"><span class="color-corn">Всего сайтов:</span> 12</div>
	</div>
	<div class="page">