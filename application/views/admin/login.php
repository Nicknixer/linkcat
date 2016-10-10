<?php
defined('BASEPATH') OR exit('No direct script access allowed');

get_header();

echo form_open('/admin/login');
?>
<table>
    <tr>
        <td><b>Логин:</b></td>
        <td><input type="text" name="login" minlength="3" maxlength="60" value="" required autofocus/></td>
    </tr>
    <tr>
        <td><b>Пароль:</b></td>
        <td><input type="password" name="password" minlength="3" maxlength="60" value="" required autofocus/></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="go" value="Войти"/>
        </td>
    </tr>
</table>
<?php
echo form_close();
get_footer();
