<?php
require_once "../connect.php";
$id = $_GET['id'];



$create = $pdo->prepare("DELETE FROM `posts` WHERE id = $id");

$create->execute();

header("Location:../index.php");