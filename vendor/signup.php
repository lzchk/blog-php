<?php
session_start();
require_once '../config/connect.php';

 $email = $_POST['email'];
 $login = $_POST['login'];
 $password = $_POST['password'];
 $passwordConfirm = $_POST['passwordConfirm'];

 if($passwordConfirm === $password){
    mysqli_query($connect, "INSERT INTO `user` (`id`, `email`, `login`, `password`) VALUES (NULL, '$email', '$login', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: /register.php');
 } else{
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: /register.php');
 }
