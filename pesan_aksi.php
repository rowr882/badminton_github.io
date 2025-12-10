<?php
include "koneksi.php";

$nama  = $_POST['nama_pembeli'];
$menu  = $_POST['nama_menu'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi, "INSERT INTO pesanan 
(nama_pembeli, nama_menu, harga, alamat,) 
VALUES 
('$nama', '$menu', '$harga', '$alamat')");

header("location:index.php");
?>
