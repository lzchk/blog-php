<?php
session_start();
require_once '../config/connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login` = '$login'");
$user = mysqli_fetch_assoc($user);

if(!$user){
    $_SESSION['message'] = 'Неверный логин!';
        header('Location: /login.php');
} else{
    if($user['password'] == $password){
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "password" => $user['password'],
        ];
        header('Location: /profile.php');
    } else{
        $_SESSION['message'] = 'Неверный пароль!';
        header('Location: /login.php');
    }
}
