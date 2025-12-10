<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']); // pastikan angka

    // Hapus gambar dulu
    $data = mysqli_query($koneksi, "SELECT * FROM bahan WHERE id_bahan=$id");
    $row = mysqli_fetch_assoc($data);
    if($row && file_exists("img/".$row['gambar'])){
        unlink("img/".$row['gambar']);
    }

    // Hapus data sesuai ID
    mysqli_query($koneksi, "DELETE FROM bahan WHERE id_bahan=$id");
    header("Location:data_pesanan.php");
    exit;
} else {
    echo "ID tidak ditemukan!";
}
?>
