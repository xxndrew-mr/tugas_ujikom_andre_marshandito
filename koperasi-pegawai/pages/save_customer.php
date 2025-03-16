<?php
include "../config/db_connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $fax = $_POST['fax'];

    $query = "INSERT INTO customer (nama, alamat, telp, fax) VALUES ('$nama', '$alamat', '$telp', '$fax')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='../index.php?page=customer';</script>";
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>
