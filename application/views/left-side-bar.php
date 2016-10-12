<div class="left-side-bar">
    <div class="left-side-menu">Категории каталога</div>
    <?php foreach ($cats as $cat) {
        echo '<div class="left-side-items"><a href="/cat/show/'.$cat['id'].'">'.$cat['name'].'</a> ('.$cat['count'].')</div>';
    } ?>
    <div class="left-side-menu">Статистика каталога</div>
    <div class="left-side-items"><span class="color-corn">Добавлено сайтов:</span> <?=$this->site->amount_all_moderated();?></div>
    <div class="left-side-items"><span class="color-corn">Комментариев: </div>
    <div class="left-side-items"><span class="color-corn">Последний сайт: </div>
</div>