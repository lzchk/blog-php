<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div class="container-login">
        <div class="login">
            <div class="title-login">Авторизация</div>
            <form action="vendor/signin.php" method="post">
                <label>Логин</label><br>
                <input name="login" type="text" class="login-input" placeholder="Введите логин"><br>
                <label>Пароль</label><br>
                <input name="password" type="password" class="login-input" placeholder="Введите пароль"><br>
                <button class="login-but" type="submit">Войти</button>
            </form>
            <div class="regist">
                У вас нет аккаунта? <a href="register.php">Зарегистрируйтесь!</a> 
            </div>
            <?php
            if(isset($_SESSION['message'])){
                echo '
                <p class="message">
                    '.
                        $_SESSION['message']
                    .'
                </p>
                ';
            } unset($_SESSION['message']);
            ?>
        </div>
    </div>
</body>
</html>