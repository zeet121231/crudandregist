<?php
require_once "../connect.php";


$title = $_POST['title'];
$content = $_POST['content'];


if($title && $content){
$create = $pdo->prepare("INSERT INTO `posts`(`title`, `content`) VALUES (:title,:content)");

$create->execute($_POST);
}
header("Location:../index.php");



