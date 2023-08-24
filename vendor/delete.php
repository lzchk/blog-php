<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM post WHERE `post`.`id` = '$id'");

header('Location: ../profile.php');