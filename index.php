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
        <div class="title-page">
            Все посты
        </div>
        <?php
                $post = mysqli_query($connect, "SELECT * FROM `post`");
                $post = mysqli_fetch_all($post);
                foreach($post as $item){
                    ?>
                <div class="post">
                    <div class="title-post"><?=$item[1]?></div>
                    <div class="desc-post"><?=$item[2]?></div>
                    <a href="post.php?id=<?=$item[0]?>" class="more">Подробнее</a>
                </div>
                <?php
                }
                ?>
    </div>
</body>
</html>