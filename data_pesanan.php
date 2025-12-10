<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #e9952fff;
            text-align: center;
        }
        th {
            background-color: #f0ad1cff;
        }
        img {
            border-radius: 8px;
        }
        .button {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }
        .edit {
            background-color: #3498db;
        }
        .edit:hover {
            background-color: #2980b9;
        }
        .delete {
            background-color: #e74c3c;
        }
        .delete:hover {
            background-color: #c0392b;
        }
        .btn-home {
            display: inline-block;
            margin-bottom: 15px;
            padding: 6px 12px;
            background-color: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-home:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<h2>Data Pesanan</h2>

<a href="index.php" class="btn-home">← Kembali ke Beranda</a>
<a href="tambah.php" class="btn-tambah">+ Tambah Bahan</a>

<table>
    <tr>
        <th>No</th>
        <th>Nama Pembeli</th>
        <th>Nama Menu</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php 
    $no = 1;
    while($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row['nama_pembeli']); ?></td>
        <td><?= htmlspecialchars($row['nama_menu']); ?></td>
        <td>Rp <?= number_format($row['harga']); ?></td>
        
        <td>
            <a href="edit_pesanan.php?id=<?= $row['id']; ?>" class="button edit">Edit</a>
            <a href="hapus_pesanan.php?id=<?= $row['id']; ?>" 
               onclick="return confirm('Yakin ingin hapus data ini?')" 
               class="button delete">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
