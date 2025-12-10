<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Pesanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h2>Tambah Pesanan</h2>

<a href="data.php" class="btn-home">← Kembali</a>

<form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
    Nama Pembeli: <br>
    <input type="text" name="nama_pembeli" required><br><br>

    Nama Menu: <br>
    <input type="text" name="nama_menu" required><br><br>


    Harga: <br>
    <input type="number" name="harga" required><br><br>




    <button type="submit">Pesan Sekarang</button>
</form>

</body>
</html>
