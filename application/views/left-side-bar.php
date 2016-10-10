<div class="left-side-bar">
    <div class="left-side-menu">Категории</div>
    <?php foreach ($cats as $cat) {
        echo '<div class="left-side-items"><a href="/cat/show/'.$cat['id'].'">'.$cat['name'].'</a> ('.$cat['count'].')</div>';
    } ?>
    <div class="left-side-menu">Статистика</div>
    <div class="left-side-items"><span class="color-corn">Всего сайтов:</span> <?=$this->site->amount_all_moderated();?></div>
</div>