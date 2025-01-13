<?php
$host = "localhost"; // Nama host
$user = "root"; // Nama pengguna database
$password = ""; // Password pengguna database
$dbname = "laundry_db"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
