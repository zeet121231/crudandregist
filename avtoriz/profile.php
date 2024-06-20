<?php
session_start();
if (!$_SESSION['user']) {
    header(header: 'Location: ../дистант.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Ваш профиль</title>
</head>

<body>
    <div class="profile">
        <h1>Профиль</h1>
        <img src="<?php echo $_SESSION['user']['avatar']; ?>" width="200" alt="аватар" class="avatar">
        <p>Почта: <?php echo $_SESSION['user']['email']; ?></p>
        <p>ФИО: <?php echo $_SESSION['user']['full_name']; ?></p>

        <a href="vendor/logout.php">Выход</a>
    </div>
</body>

</html>