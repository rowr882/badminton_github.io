<?php
include 'koneksi.php';

$menu   = $_GET['menu']   ?? '';
$harga  = $_GET['harga']  ?? '';
$gambar = $_GET['gambar'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Form Pesanan</title>
  <link rel="stylesheet" href="pesan.css">
</head>
<body>

<div class="form-box">
  <h2>Form Pesanan</h2>

  <form action="simpan_pesanan.php" method="post">

    <input type="hidden" name="gambar" value="<?= $gambar ?>">

    <label>Nama Pembeli</label>
    <input type="text" name="nama_pembeli" required>

    <label>Nama Menu</label>
    <input type="text" name="nama_menu" value="<?= $menu ?>" readonly>

    <label>Harga</label>
    <input type="number" name="harga" value="<?= $harga ?>" readonly>




    <button type="submit">Kirim Pesanan</button>

  </form>

  <a href="index.php" class="back">← Kembali</a>
</div>

</body>
</html>
