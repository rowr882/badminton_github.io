<?php
include 'koneksi.php';

if(isset($_POST['id'])){
    $id = intval($_POST['id']); // pastikan ID aman
    $nama_pembeli = mysqli_real_escape_string($koneksi, $_POST['nama_pembeli']);
    $nama_menu = mysqli_real_escape_string($koneksi, $_POST['nama_menu']);
    $harga = intval($_POST['harga']);

    // Query update data
    $update = "UPDATE pesanan SET 
                nama_pembeli='$nama_pembeli',
                nama_menu='$nama_menu',
                harga=$harga
               WHERE id = $id";

    if(mysqli_query($koneksi, $update)){
        header("Location:data_pesanan.php"); // kembali ke halaman daftar
        exit;
    } else {
        echo "Gagal update data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan!";
}
?>
