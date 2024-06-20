<?php
// session_start();
// require_once 'connect.php';

// $login = $_POST['login'];
// $password = md5($_POST['password']);

// $check_user = mysqli_query($connect, query:"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
//     if (mysql_num_rows($check_user) > 0){
//         $user = mysqli_fetch_assoc($check_user);
//     $_SESSION['user'] = [
//         'id'=> $user['id'],
//         'full_name'=> $user['full_name'],
//         'avatar'=> $user['avatar'],
//         'email'=> $user['email'],
//     ];
//     header(header:'Location: ../profile.php');
// } else {
//     $_SESSION['message'] = 'Пользователь не найден';
//     header(header:'Location: ../дистант.php');
// } 



session_start();

require_once 'connect.php';

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
    header('Location: ../profile.php');
} else {
    $_SESSION['massage'] = 'Неверный Логин или Пароль!!!';
    header('Location: ../дистант.php');
}