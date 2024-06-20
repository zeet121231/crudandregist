<?php
$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'sytes' );

if(!$connect){
    die('ошибка ');
}