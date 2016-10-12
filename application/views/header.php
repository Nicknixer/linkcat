<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
if(!isset($cat_description))
    $cat_description = "Модерируемый белый каталог сайтов, добавьте свой сайт бесплатно. Прямая обратная ссылка.";
if(!isset($cat_keywords))
    $cat_keywords = "каталог,сайты,добавить,сайт";

?>

<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Nickolay Sergeychuk" />
	<meta name="description" content="<?=$cat_description; ?>">
	<meta name="keywords" content="<?=$cat_keywords; ?>">
	<title>Каталог сайтов | <?=$title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="stylesheet" href="/libs/style.css">
</head>
<body>

	<nav>
		<ul>
			<li><a href="/">ГЛАВНАЯ</a></li>
			<li><a href="/obratnaya_svyaz">ОБРАТНАЯ СВЯЗЬ</a></li>
			<li><a href="/reklama">РЕКЛАМА</a></li>
			<li><a href="/dobavit_site" id="add-site">ДОБАВИТЬ САЙТ</a></li>
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