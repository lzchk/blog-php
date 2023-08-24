<?php
session_start();
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['description'];

mysqli_query($connect, "UPDATE `post` SET `title` = '$title', `description` = '$desc' WHERE `post`.`id` = '$id'");

header('Location: ../profile.php');