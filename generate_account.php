<?php

require_once 'vendor/autoload.php';
require 'config.php';

$faker = Faker\Factory::create();

$name = $faker->name();
$username = $faker->userName();
$password = password_hash($faker->password(), PASSWORD_DEFAULT);

$sql = "INSERT INTO $table_users VALUES('', '$name', '$username', '$password')";

$query = mysqli_query($connect, $sql);

if ($query) {
    echo 'Berhasil tambah data.';
} else {
    echo 'Gagal tambah data.';
}
