<!-- <div class="container" style="margin-top: 50px;"
    <h2 style="text-align: center;">Testimoni Pelanggan</h2>
    <p style="text-align: center; margin-bottom: 30px;">Lihat apa kata mereka tentang Rujak Boz!</p>

    <?php
    // --- KONEKSI DATABASE DIMULAI ---
    
    // Query: Ambil 3 data testimoni terbaru dari database
    // Ganti 'data_testimoni' dengan nama tabel Anda
    $sql_testi = "SELECT nama_user, isi_testimoni FROM data_testimoni ORDER BY id DESC LIMIT 3";
    $result_testi = $koneksi->query($sql_testi);

    if ($result_testi->num_rows > 0) {
        // Mulai wadah (container) untuk testimoni
        echo "<div class='testimoni-grid' style='display: flex; justify-content: space-around; gap: 20px; flex-wrap: wrap;'>";
        
        // Looping untuk menampilkan setiap baris data
        while($row = $result_testi->fetch_assoc()) {
            // Tampilkan data dalam format card/box
            echo "<div class='testimoni-card' style='width: 300px; padding: 20px; border: 1px solid #ff9933; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #fff;'>";
            echo "<p style='font-style: italic; color: #555;'>\"" . htmlspecialchars($row['isi_testimoni']) . "\"</p>";
            echo "<h4 style='color: #ff9933; margin-top: 15px;'>- " . htmlspecialchars($row['nama_user']) . "</h4>";
            echo "</div>";
        }
        echo "</div>"; // Akhir wadah testimoni
    } else {
        echo "<p style='text-align: center; color: #888;'>Belum ada testimoni. Jadilah pelanggan pertama yang memberi ulasan!</p>";
    }
    
    // --- KONEKSI DATABASE BERAKHIR ---
    
    // Opsional: Tutup koneksi di akhir file
    // $koneksi->close(); 
    ?>
</div>> -->