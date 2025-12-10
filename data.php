<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bahan Rujak</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Data Bahan Rujak</h2>

<div class="crud-btn">
    <a href="index.php" class="btn-home">← Kembali ke Beranda</a>
    <a href="tambah.php" class="btn-tambah">+ Tambah Bahan</a>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM bahan ORDER BY id_bahan ASC");
    while($row = mysqli_fetch_assoc($data)){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row['nama_bahan']); ?></td>
        <td>Rp <?= number_format($row['harga']); ?></td>
        <td>
            <?php 
            if($row['gambar'] != "" && file_exists("img/".$row['gambar'])){
                echo '<img src="img/'.$row['gambar'].'" width="60" style="border-radius:8px;">';
            } else {
                echo 'Belum ada gambar';
            }
            ?>
        </td>
        <td>
            <a href="edit.php?id=<?= $row['id_bahan']; ?>">Edit</a>
            <a href="hapus.php?id=<?= $row['id_bahan']; ?>" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
