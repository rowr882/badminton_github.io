<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']); // aman dari input jahat

    // Hapus data sesuai ID
    mysqli_query($koneksi, "DELETE FROM pesanan WHERE id = $id");
    header("Location:data_pesanan.php");
    exit;
} else {
    echo "ID tidak ditemukan!";
}
?>
