<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php get_header(); ?>
<div class="site-block">
    <div class="title-site"><b>Добавление сайта</b></div>
    <?php echo form_open('/add'); ?>
    <div class="info-site">
        <?php echo validation_errors(); ?>
        <table>
            <tr>
                <td><b>Название:</b></td>
                <td><input type="text" name="title" minlength="12" maxlength="60" value="<?php echo set_value('title'); ?>" required autofocus/></td>
            </tr>
            <tr>
                <td>
                    <b>Адрес сайта(URL):</b>
                </td>
                <td>
                    <input type="url" name="url" value="<?php echo set_value('url'); ?>" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Категория:</b>
                </td>
                <td>
                    <select name="category">
                    <?php foreach ($cats as $cat)
                    {
                        echo'<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Описание:</b>
                </td>
                <td>
                    <textarea name="description" rows="4" cols="30" minlength="50" maxlength="600" placeholder="Как можно подробнее опишите ваш сайт" required><?php echo set_value('description'); ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" name="agree" value="accept" required/> Согласен с <a href="/rules">правилами</a> каталога.
                </td>
                <td>
                    <input type="submit" name="add" value="Добавить"/>
                </td>
            </tr>
        </table>
    </div>
    <?php echo form_close(); ?>
</div>
<?php get_footer(); ?>
