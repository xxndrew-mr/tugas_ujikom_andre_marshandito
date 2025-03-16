<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan username MySQL Anda
$pass = ""; // Sesuaikan dengan password MySQL Anda
$db = "db_koperasi_pegawai";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
