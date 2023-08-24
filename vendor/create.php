<?php
session_start();
require_once '../config/connect.php';

$id = $_SESSION['user']['id'];
$title = $_POST['title'];
$desc = $_POST['description'];

mysqli_query($connect, "INSERT INTO `post` (`id`, `title`, `description`, `id_user`) VALUES (NULL, '$title', '$desc', '$id')");

header('Location: ../index.php');