<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header(true);
?>
    <div class="site-block">
        <div class="title-site"><b>Изменение сайта</b></div>
        <?php echo form_open('/admin/panel/edit_category/'.$cat['id']); ?>
        <div class="info-site">
            <?php echo validation_errors(); ?>
            <table>
                <tr>
                    <td><b>Название:</b></td>
                    <td><input type="text" name="name" value="<?php echo $cat['name']; ?>" required autofocus/></td>
                </tr>
                <tr>
                    <td>
                        <?php if($cat['id'] == -1)
                        {
                            echo '<input type="submit" name="add" value="Добавить"/>';
                        }
                        else
                        {
                            echo '<input type="submit" name="add" value="Изменить"/>';
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php echo form_close(); ?>
    </div>
<?php get_footer(); ?>