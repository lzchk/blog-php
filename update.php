<?php
session_start();
require_once 'config/connect.php';

$post_id = $_GET['id'];
$post = mysqli_query($connect, "SELECT * FROM `post` WHERE `id` = $post_id");
$post = mysqli_fetch_assoc($post);
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
                Редактирование поста
            </div>
            <form action="vendor/update.php" method="post">
                <input type="hidden" name="id" value="<?=$post['id']?>">
                <p>Заголовок</p>
                <input type="text" class="login-input" name="title" value="<?=$post['title']?>">
                <p>Описание</p>
                <textarea name="description" id="" cols="96" rows="10"><?=$post['description']?></textarea><br>
                <button type="submit" class="login-but">Изменить</button>
            </form>
        </div>
    </div>
</body>
</html>