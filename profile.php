<?php
session_start();
require_once 'config/connect.php';

$id = $_SESSION['user']['id'];
$post = mysqli_query($connect, "SELECT * FROM `post` WHERE `id_user` = '$id'");
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
                Привет, <?= $_SESSION['user']['login'] ?>!
            </div>
            Ваш логин: <?= $_SESSION['user']['login'] ?><br>
            Ваш email: <?= $_SESSION['user']['email'] ?><br>
            Ваш пароль: ***
        </div>
        <a href="createPost.php" class="more">Добавить пост</a>
        <br><br><br>
        <div class="title-page">
            Мои посты
        </div>
        <?php
        $post = mysqli_fetch_all($post);
        foreach($post as $item){
            ?>
        <div class="post">
            <div class="title-post"><?=$item[1]?></div>
            <div class="desc-post"><?=$item[2]?></div>
            <a href="post.php?id=<?=$item[0]?>" class="more">Подробнее</a>
            <a href="update.php?id=<?=$item[0]?>" class="more">Редактировать</a>
            <a href="vendor/delete.php?id=<?=$item[0]?>" class="more">Удалить</a>
        </div>
        <?php
        }
        ?>  
    </div>
</body>
</html>