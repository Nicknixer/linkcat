<div class="left-side-bar">
    <div class="left-side-menu">Категории каталога</div>
    <?php foreach ($cats as $cat) {
        echo '<div class="left-side-items"><a href="/cat/show/'.$cat['id'].'">'.$cat['name'].'</a> ('.$cat['count'].')</div>';
    } ?>
    <div class="left-side-menu">Статистика каталога</div>
    <div class="left-side-items"><span class="color-corn">Добавлено сайтов:</span> <?=$this->site->amount_all_moderated();?></div>
    <div class="left-side-items"><span class="color-corn">Комментариев:</span> 0</div>
    <div class="left-side-items"><span class="color-corn">Последний сайт:</span> <a style="text-decoration: underline;" href="http://jobeet/sites/show/<?php echo $last_site['id']; ?>"><?php echo $last_site['title']; ?></a></div>
</div>