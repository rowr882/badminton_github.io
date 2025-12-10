<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']); // aman dari input jahat

    $query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id = $id");
    if(mysqli_num_rows($query) == 0){
        echo "Data tidak ditemukan!";
        exit;
    }

    $row = mysqli_fetch_assoc($query);
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<h2>Edit Pesanan</h2>

<form action="edit_pesanan_aksi.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    <label>Nama Pembeli</label><br>
    <input type="text" name="nama_pembeli" value="<?= htmlspecialchars($row['nama_pembeli']); ?>" required><br><br>

    <label>Nama Menu</label><br>
    <input type="text" name="nama_menu" value="<?= htmlspecialchars($row['nama_menu']); ?>" required><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga" value="<?= $row['harga']; ?>" required><br><br>

    

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
