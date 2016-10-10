<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header(true); // use true parameter For admin header

foreach ($sites as $site)
{
    echo '
				<div class="site-block">
				<div class="title-site"><b>'.$site['title'].'</b></div>
				<div class="info-site"><b>Адрес:</b> <a href="/cat/go/'.$site['id'].'">'.$site['url'].'</a></div>
				<div class="info-site"><b>Дата добавления:</b> '.$site['date'].'</div>
				<div class="info-site"><b>Описание:</b> '.$site['description'].'</div>
				<div class="info-site"><a href="/admin/panel/allow/'.$site['id'].'">Одобрить</a> | <a href="/admin/panel/edit/'.$site['id'].'">Изменить</a> | <a href="/admin/panel/delete/'.$site['id'].'">Удалить</a></div>
				</div>
			';
}

get_footer();
