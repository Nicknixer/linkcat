<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/libs/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="/">ГЛАВНАЯ</a></li>
        <li><a href="/">ОБРАТНАЯ СВЯЗЬ</a></li>
        <li><a href="/">РЕКЛАМА</a></li>
        <li><a href="/add"><span class="add-site">ДОБАВИТЬ САЙТ</span></a></li>
        <div class="search"><input type="search" name="search"  /><input type="button" name="search" value="OK"></div>
    </ul>

</nav>
<div class="content">
    <div class="title-top"><h1><a href="/admin/panel">Панель администратора</a> - <?php echo $title; ?></h1></div>
    <div class="left-side-bar">
        <div class="left-side-menu">Меню:</div>
        <div class="left-side-items"><a href="/admin/panel">Ожидают проверки </a>(<?php echo $new; ?>)</div>
    </div>
    <div class="page">