<?php
defined('BASEPATH') OR exit('No direct script access allowed');
get_header();
?>

<div class="site-block">
    <div class="title-site"><b>Добро пожаловать в белый каталог сайтов!</b></div>
    <div class="info-site">
        Перед вами модерируемый <strong>белый каталог сайтов</strong>.<br />
        В рунете тысячи белых каталогов сайтов, но этот <strong>особенный</strong>!<br />
        Вы совершенно бесплатно можете <strong>добавить свой сайт в каталог</strong> и он появится в списке.<br />
        Добавление сайта в белый каталог позволяет совершенно бесплатно получить обратную ссылку на ваш сайт!<br />
        Это очень полезно для SEO-оптимизации вашего сайта.<br />
        Вперед! <a href="/dobavit_site">Добавьте свой сайт</a>.
    </div>
</div>

<?php
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

