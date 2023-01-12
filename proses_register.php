<?php

require 'config.php';
$status = '';

if (isset($_POST['submit'])) {
    $nama_pengguna = $_POST['nama_pengguna'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO $table_logistics VALUES('$nama_pengguna', '$username', '$password')";
    $query = mysqli_query($connect, $sql);

    // * PAKE $_GET[]
    if ($query) {
        // * HEADER BELUM CUMA GET STATUS DARI BACKEND SUCCESS
        // header();
        $status = 'register_success';
    } else {
        $status = 'register_failed';
    }
} else {
}
