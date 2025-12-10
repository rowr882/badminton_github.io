<?php
include 'koneksi.php';

$nama   = $_POST['nama_pembeli'];
$menu   = $_POST['nama_menu'];
$harga  = $_POST['harga'];
$alamat = $_POST['alamat'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi, "INSERT INTO pesanan 
(nama_pembeli, nama_menu, harga, alamat, gambar)
VALUES 
('$nama','$menu','$harga','$alamat','$gambar')");

echo "<script>
alert('Pesanan berhasil disimpan!');
window.location='data_pesanan.php';
</script>";
