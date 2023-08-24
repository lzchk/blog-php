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
        <div class="login register">
            <!-- <div class="title-login">Регистрация</div> -->
            <form action="vendor/signup.php" method="post">
                <label>Почта</label><br>
                <input type="email" name="email" class="login-input" placeholder="test@mail.ru"><br>
                <label>Логин</label><br>
                <input type="text" name="login" class="login-input" placeholder="Введите логин"><br>
                <label>Пароль</label><br>
                <input type="password" name="password" class="login-input" placeholder="Введите пароль"><br>
                <label>Подтверждение пароля</label><br>
                <input type="password" name="passwordConfirm" class="login-input" placeholder="Подтвердите пароль"><br>
                <button class="login-but" type="submit">Зарегистрироваться</button>
            </form>
            <div class="regist">
                У вас уже есть? <a href="login.php">Авторизуйтесь!</a> 
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