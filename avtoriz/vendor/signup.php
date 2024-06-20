<?php
//исходная версия
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    
    if(isset($_FILES['avatar'])){
        $path = 'uploads/' .time() .$_FILES['avatar']['name'];
        if ( !move_uploaded_file($_FILES['avatar']['tmp_name'], '../' .$path) ) {
            $_SESSION['massage'] = 'Ошибка загрузки изображения!!!';
            header('Location: ../register.php');
        
            exit();
        }
    }


    $password = md5($password);
    $sql = "INSERT INTO `Blog21` (`id`,`full_name`,`login`,`email`,`password`,`avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')";
    mysqli_query($connect, $sql);
    $_SESSION['massage'] = 'регистрация прошла успешно';
    header('Location: ../дистант.php');
} else {
    $_SESSION['massage'] = 'Пароли не совпадают ';
    header('Location: ../register.php');
} 

