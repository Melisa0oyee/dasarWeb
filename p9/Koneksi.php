<?php
// Deklarasi variabel
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwedb";

// Buat koneksi
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>