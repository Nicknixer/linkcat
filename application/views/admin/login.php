<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход в панель</title>
</head>
<body>
<?php echo form_open('/admin/login'); ?>
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
<?php echo form_close(); ?>
</body>
</html>