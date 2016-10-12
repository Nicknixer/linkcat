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
                <td><input type="text" name="title" minlength="12" maxlength="60" value="<?php echo set_value('title'); ?>" placeholder="Полное название сайта" required autofocus/></td>
            </tr>
            <tr>
                <td>
                    <b>Адрес сайта(URL):</b>
                </td>
                <td>
                    <input type="url" name="url" value="<?php echo set_value('url'); ?>" placeholder="http://example.com" required/>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Email владельца:</b>
                </td>
                <td>
                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" required/>
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
                    <b>Краткое описание:</b>
                </td>
                <td>
                    <textarea name="short_description" rows="2" cols="30" minlength="20" maxlength="200" placeholder="Кратко опишите ваш сайт" required><?php echo set_value('short_description'); ?></textarea>
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
                    <b>Ключевые слова:</b>
                </td>
                <td>
                    <textarea name="keywords" rows="2" cols="30" minlength="5" maxlength="200" placeholder="Ключевые слова разделяйте запятой" required><?php echo set_value('keywords'); ?></textarea>
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
