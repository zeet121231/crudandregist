<?php
session_start();
// if (isset($_SESSION['user'])) {
//     header('Location: ../profile.php');
// }
//не понятно почему перестала работать авторизация и регистрация(((
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <p>Тут будет форма регистрации:</p>

        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите ФИО">

        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">

        <label>Email</label>
        <input type="email" name="email" placeholder="Введите email">

        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">

        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Введите пароль еще раз">

        <label>Изображение пользователя</label>
        <input type="file" name="avatar">
        <button type="submit"> Зарегистрироваться </button>
        <p>
            У вас есть аккаунт? - <a href="дистант.php"> авторизироваться </a>
        </p>



        <?php
        if (isset($_SESSION['massage'])) {
            echo '<p class = "massage"> ' . $_SESSION['massage'] . '</p>';
        }
        unset($_SESSION['massage']);
        ?>


    </form>

</body>

</html>