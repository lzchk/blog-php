<?php
session_start();
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>BLog</title>
</head>
<body>
    <header>
        <div class="container row header">
            <div class="logo"><a href="index.php">BLOG</a></div>
            <div class="menu row">
                <?php
                if(isset($_SESSION['user'])){
                    echo '
                    <div class="item-menu"><a href="profile.php">Профиль</a></div>
                    <div class="item-menu"><a href="login.php">Выход</a></div>
                    ';
                } else{
                    echo '
                    <div class="item-menu"><a href="login.php">Вход</a></div>
                    ';
                }
                ?>
            </div>  
        </div>
    </header>
    <div class="container">
        <div class="post">
            <div class="title-page">
                Добавление поста
            </div>
            <form action="vendor/create.php" method="post">
                <p>Заголовок</p>
                <input type="text" name="title" class="login-input">
                <p>Описание</p>
                <textarea name="description" id="" cols="96" rows="10"></textarea>
                <button type="submit" class="login-but">Опубликовать</button>
            </form>
        </div>
    </div>
</body>
</html>