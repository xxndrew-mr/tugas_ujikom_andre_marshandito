<?php
$host = "localhost";
$user = "root"; // Default user MySQL di XAMPP
$pass = "";
$db = "db_produk_ujikom"; // Sesuai nama database yang di-import

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
