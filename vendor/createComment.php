<?php
session_start();
require_once '../config/connect.php';

$id = $_SESSION['user']['id'];
$post_id = $_POST['id'];
$text = $_POST['text'];
mysqli_query($connect, "INSERT INTO `comment` (`id`, `id_post`, `text`, `id_user`) VALUES (NULL, '$post_id', '$text', '$id')");

header('Location: ../post.php?id=' . $post_id);
