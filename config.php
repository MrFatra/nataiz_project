<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'nataiz_express';

$table_logistics = 'logistics';

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) {
    die('Gagal connect ke database!');
}
