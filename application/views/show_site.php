<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header();


    echo '
				<div class="site-block">
				<div class="title-site"><b>Информация о сайте</b></div>
				
				<div class="info-site"><b>Дата добавления:</b> '.$site['date'].'</div>
				<div class="info-site"><b>Адрес:</b> <a href="/cat/go/'.$site['id'].'">'.$site['url'].'</a></div>
				<div class="info-site"><b>Описание:</b> '.$site['description'].'</div>
				<div class="info-site"><b>Ключевые слова:</b> '.$site['keywords'].'</div>
				<div class="info-site"><b>Перейти на сайт</b> <a href="'.$site['url'].'">'.$site['title'].'</a></div>
				</div>
				
				<div class="site-block">
				<div class="title-site"><b>Комментарии о сайте</b></div>
				<div class="info-site">Комментариев пока нет.</div>
				</div>
			';

get_footer();
