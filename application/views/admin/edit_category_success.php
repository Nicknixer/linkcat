<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header(true);

echo '

<div class="site-block">
    <div class="title-site"><b>'.$title.'</b></div>
    <div class="info-site">Категория '.$cat['name'].' успешно '.$msg.'!</div>
</div>
      ';
get_footer();
