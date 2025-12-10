<?php
include 'koneksi.php';

$id     = $_POST['id_bahan'];       // dari input hidden
$nama   = $_POST['nama_menu'];
$harga  = $_POST['harga'];

// Ambil data lama
$query = mysqli_query($koneksi, "SELECT * FROM bahan WHERE id_bahan='$id'");
$old = mysqli_fetch_assoc($query)['gambar'];



// Update database
mysqli_query($koneksi, "UPDATE bahan SET 
    nama_menu='$nama',
    harga='$harga',
    WHERE id_bahan='$id'
");

header("location:data.php");
?>
