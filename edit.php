<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM bahan WHERE id_bahan='$id'");
$row = mysqli_fetch_assoc($data);
?>
<link rel="stylesheet" href="styles.css">
<h2>Edit Menu</h2>

<!-- Tombol kembali yang pasti muncul -->
<p>
    <a href="index.php">⬅ Kembali ke Beranda</a>
</p>

<form action="edit_aksi.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_bahan" value="<?= $row['id_bahan'] ?>">

    Nama menu : <br>
    <input type="text" name="nama_menu" value="<?= $row['nama_menu'] ?>" required><br><br>

    Harga : <br>
    <input type="number" name="harga" value="<?= $row['harga'] ?>" required><br><br>

   

    <button type="submit">Update</button>
</form>

