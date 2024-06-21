<?php
session_start();

require_once 'vendor\connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_users = mysqli_query($connect, "SELECT * FROM `Blog21` WHERE `login` = '$login' AND `password` = '$password'");
$user = mysqli_fetch_assoc($check_users);
if ( $check_users->num_rows== 1) {
    $_SESSION['user'] = [
        'id' => $user['id'],
        'full_name' => $user['full_name'],
        'login' => $user['login'],
        'email' => $user['email'],
        'avatar' => $user['avatar']
    ];
    header('Location: ../index.php');
} else {
    $_SESSION['massage'] = 'Неверный Логин или Пароль!!!';
    header('Location: ../дистант.php');
}