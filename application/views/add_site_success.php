<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
echo '

<div class="site-block">
    <div class="title-site"><b>'.$title.'</b></div>
    <div class="info-site"><b>Адрес:</b> <a href="/cat/go/'.$id.'">'.$url.'</a></div>
    <div class="info-site"><b>Дата добавления:</b> '.$date.'</div>
    <div class="info-site"><b>Описание:</b> '.$description.'</div>
    <div class="info-site"><b>Успешно добавлен!</b></div>
</div>
      ';
?>