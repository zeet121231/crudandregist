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
    <title>авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="vendor/signin.php" method="post">
        <p>Тут будет форма авторизации:</p>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name ="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>
        </p>

            <?php
            if ( isset($_SESSION['massage'])){
                echo '<p class = "massage"> ' . $_SESSION['massage'] . '</p>';

            }unset($_SESSION['massage']);
            ?>
<a href="/ttt/index.php">Посты</a>
    </form>
    
</body>

</html>