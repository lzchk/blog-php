<?php
session_start();
require_once 'config/connect.php';

$post_id = $_GET['id'];
$post = mysqli_query($connect, "SELECT * FROM `post` WHERE `id` = $post_id");
$post = mysqli_fetch_assoc($post);

// print_r($comment);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>BLOG</title>
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
        <div class="back">
            <a href="index.php">Главная</a> / <?=$post['title']?>
        </div>
        <div class="post">
            <div class="title-post"><?=$post['title']?></div>
            <div class="post-in"><?=$post['description']?></div>
        </div>
        <div class="comments">
            <div class="title-comm title-post">Комментарии</div>
            <form action="vendor/createComment.php" method="post">
                <input type="hidden" value="<?=$post['id']?>" name="id">
                <textarea name="text" id="" cols="30" rows="10" class="comm-area">
                </textarea><br>
                <button type="submit" class="w-17">Отправить</button>
            </form>
            <br>
            <?php
            $comment = mysqli_query($connect, "SELECT * FROM `comment` WHERE `id_post` = $post_id");
            $comment = mysqli_fetch_all($comment);
            foreach ($comment as $comm){
            ?>
                <div class="comm">
                    <div class="user"><?php
                    $user = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = $comm[3]");
                    $user = mysqli_fetch_assoc($user);
                    echo $user['login'];
                    ?></div>
                    <div class="comm-text"><?=$comm[2]?></div>
                </div>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>