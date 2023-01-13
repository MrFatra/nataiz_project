<?php

require 'config.php';
$status = '';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * $table_users WHERE username='$username'";
    $query = mysqli_query($connect, $sql);

    // * PAKE $_GET[]
    if ($query && $query->num_rows > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if (password_verify($password, $data['password'])) {
                $status = 'berhasil_login';
                // header();
            } else {
                $status = 'Invalid username/password.';
            }
        }
        // * HEADER BELUM CUMA GET STATUS DARI BACKEND SUCCESS
        // header();
        $status = 'register_success';
    } else {
        $status = 'register_failed';
    }
} else {
}
