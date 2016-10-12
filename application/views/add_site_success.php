<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header();

echo '
<div class="site-block">
    <div class="title-site"><b>'.$site['title'].'</b></div>
    <div class="info-site"><b>EMail владельца:</b> '.$site['email'].'</div>
    <div class="info-site"><b>Адрес:</b> <a href="/cat/go/'.$site['id'].'">'.$site['url'].'</a></div>
    <div class="info-site"><b>Дата добавления:</b> '.$site['date'].'</div>
    <div class="info-site"><b>Краткое описание:</b> '.$site['short_description'].'</div>
    <div class="info-site"><b>Описание:</b> '.$site['description'].'</div>
    <div class="info-site"><b>Ключевые слова:</b> '.$site['keywords'].'</div>
    <div class="info-site"><b>Успешно добавлен!</b></div>
</div>';

get_footer();

