<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header();

foreach ($sites as $site)
{
			echo '
				<div class="site-block">
				<div class="title-site"><b>'.$site['title'].'</b></div>
				<div class="info-site">'.$site['short_description'].'</div>
				<div class="info-site"><a href="/sites/show/'.$site['id'].'">Перейти к сайту</a></div>
				</div>
			';
}

get_footer();
