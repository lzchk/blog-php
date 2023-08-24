<?php
$connect = mysqli_connect('localhost', 'root', '', 'blog');

if(!$connect) {
    die('Не удалось подключиться в базе данных!');
}