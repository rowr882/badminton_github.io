<?php
include "koneksi.php";

$nama_pembeli = $_POST['nama_pembeli'];
$nama_menu    = $_POST['nama_menu'];
$harga        = $_POST['harga'];


mysqli_query($koneksi, "INSERT INTO pesanan (nama_pembeli, nama_menu, harga) 
                        VALUES ('$nama_pembeli', '$nama_menu', '$harga')");

echo "<script>
alert('Pesanan berhasil disimpan!');
window.location='data_pesanan.php';
</script>";
?>
