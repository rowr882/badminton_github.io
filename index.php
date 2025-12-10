<?php
include 'koneksi.php';
$bahan = mysqli_query($koneksi, "SELECT * FROM bahan");
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" class="rel">
    <title>rujak_boz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="Rujak bozz">
    <img src="logo.2.png" alt="logo" class="logo">
    <span class="brand-text">Rujak Boz</span>
    </a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="" href="index.php#home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="" href="index.php#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#tentang">Tentang Toko</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#testimoni">Testimoni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
    <a href="#" class="Login-button">Hubungi</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    
    
</html>
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h1 class="hero-title fade-up">Sensasi Pedas <br><span class="text-oren">Segar Menggoda!</span></h1>
                <p class="lead text-secondary my-4">Nikmati perpaduan buah tropis segar dengan sambal gula merah kacang yang kental. Asli bikin melek!</p>
                <div class="d-flex gap-3">
                    <a href="#menu" class="btn btn-rujak">Pesan Sekarang</a>
                    <a href="#tentang" class="btn btn-outline-warning text-dark border-2 rounded-pill px-4 py-2 fw-bold">Lihat Menu</a>
                </div>
            </div>
                <div class="col-lg-6 text-center">
                <div class="rujak-img-placeholder">
                    <img src="rujak.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- //* tentang toko */ -->
<section id="tentang" class="py-5 fade-up">
    <section class="section-soft">
  <br> <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Tentang <span class="text-oren">Rujak Boz</span></h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 ">
                <video autoplay muted loop playsinline width="400">
                <source src="rujakvidio.mp4" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-6">
                <p class="text-dark fs-5 fw-semibold">
                   Rujak Boz merupakan rujak buah yang cocok untuk menemani hari-hari kamu. Buah-buahan yang dijamin kesegarannya serta bumbu gula merah yang sangat menggoda. Kamu akan mendapatkan sensasi pedas, manis, dan segar dalam satu gigitan. 
                        Dengan rasa yang konsisten dan pelayanan ramah, kami berharap Rujak Boz bisa jadi tempat favoritmu setiap kali ingin makan rujak yang segar dan mantap!
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-2">
                        <span class="text-oren me-3 fs-4">&#10003;</span>
                        <div>
                            <strong class="fw-bold">Buah Pilihan Terbaik:</strong> Hanya buah-buahan segar yang akan kami sajikan setiap hari.
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-2">
                        <span class="text-oren me-3 fs-4">&#10003;</span>
                        <div>
                            <strong class="fw-bold">Sambal Spesial:</strong> Perpaduan kacang dan gula merah yang nikmat membuat rasa Rujak Boz semakin nampol.
                        </div>
                    </li>
                    <li class="d-flex align-items-start">
                        <span class="text-oren me-3 fs-4">&#10003;</span>
                        <div>
                            <strong class="fw-bold">Pelayanan Ramah:</strong> Kami selalu siap melayani Anda dengan senyum ramah tamah serta memastikan penyajian Rujak Boz dengan baik
                        </div>
                    </li>
                </ul>
                <a href="#kontak" class="btn btn-rujak mt-4">Hubungi Kami</a>
            </div>
        </div>
    </div>
    <section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-4">
                <h2 class="fw-bold text-oren">1.200+</h2>
                <p>Porsi Terjual</p>
            </div>

            <div class="col-md-4">
                <h2 class="fw-bold text-oren">300+</h2>
                <p>Pelanggan Puas</p>
            </div>

            <div class="col-md-4">
                <h2 class="fw-bold text-oren">4.9★</h2>
                <p>Rating</p>
            </div>

        </div>
    </div>
</section>

<section id="menu" class="menu-section">
  <div class="container text-center">
    <h2 class="menu-title">Menu Favorit Rujak Boz</h2>
    <p class="menu-subtitle">Pedasnya nampol, bumbunya nagih!</p>

    <div class="menu-grid">

      <!-- ITEM 1 -->
      <div class="menu-card">
        <img src="asinanbuah.png" alt="Rujak Serut">
        <h4>Asinan Buah</h4>
        <p>Asam pedas manis</p>
        <span class="price">Rp 12.000</span>

        <a href="pesan.php?menu=Asinan%20Buah&harga=12000&gambar=asinanbuah.png" class="btn-menu">Pesan</a>

    </div>


      <!-- ITEM 2 -->
     <div class="menu-card">
        <img src="rj.png" alt="Rujak Serut">
        <h4>Rujak Boz</h4>
        <p>Bumbu nya joss</p>
        <span class="price">Rp 10.000</span>

        <a href="pesan.php?menu=Rujak%20Boz&harga10000&gambar=rj.png" class="btn-menu">Pesan</a>

    </div>


      <!-- ITEM 3 -->
      <div class="menu-card">
        <img src="rujakserut.png" alt="Rujak Serut">
        <h4>Rujak Serut</h4>
        <p>Serut pedas manis bikin nagih</p>
        <span class="price">Rp 8.000</span>

        <a href="pesan.php?menu=Rujak%20Serut&harga=8000&gambar=rujakserut.png" class="btn-menu">Pesan</a>

     </div>


    </div>
  </div>
</section>

</section>

<style>
        /* CSS Dasar untuk Tampilan */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang abu-abu muda */
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling Header Menu */
        .menu-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .menu-header h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .menu-header p {
            color: #666;
            font-size: 14px;
        }

        /* Styling Grid Container */
        .card-grid {
            display: grid;
            /* Membuat 3 kolom dengan lebar yang sama */
            grid-template-columns: repeat(3, 1fr);
            gap: 20px; /* Jarak antar card */
            justify-items: center; /* Item diletakkan di tengah */
        }

        /* Penyesuaian untuk layout 4 item di gambar (3 di atas, 1 di bawah) */
        @media (max-width: 992px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .card-grid {
                grid-template-columns: 1fr;
            }
        }
        

        /* Styling Product Card */
        .product-card {
            border-radius: 8px;
            overflow: hidden; /* Pastikan gambar tidak keluar dari border radius */
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Bayangan pada card */
            transition: transform 0.3s ease;
            width: 100%;
            max-width: 300px; /* Batasi lebar maksimum */
        }

        .product-card:hover {
            transform: translateY(-5px); /* Efek saat di-hover */
        }

        .product-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-content {
            background-color: #ff9933; /* Warna oranye seperti di gambar */
            padding: 15px 10px;
            color: white;
            min-height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .label-menu {
            font-size: 10px;
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
            padding: 3px 6px;
            border-radius: 3px;
            display: inline-block;
            margin-bottom: 5px;
        }

        .card-content h3 {
            font-size: 18px;
            margin: 0;
            text-transform: uppercase;
        }

        .card-content p {
            font-size: 12px;
            margin: 5px 0 10px 0;
        }

        .card-content .price {
            font-size: 24px;
            font-weight: bold;
            margin: 5px 0 10px 0;
        }

        .card-content .order-btn {
            background-color: white;
            color: #ff9933;
            padding: 8px 0;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
<div class="container">
    <div class="menu-header">
        <h2>Data RujakBozz</h2>
        <p>ayo pilih menu kesukaanmu!</p>
    </div>

    <div class="card-grid">
        <div class="product-card">
            <img src="rj.png" alt="Rujak Bos">
            <div class="card-content">
                <h3>rujak bos</h3>
                <div class="price">Rp 8.000</div>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
</html>

<section class="py-5 text-center" 
style="
background: linear-gradient(135deg, #8d5524, #5a2d0c) !important;
border-radius: 50px;
margin: 50px 40px;
">
  <div class="container" style="background: transparent !important; box-shadow: none !important; padding: 30px;">
    <h2 style="color: white !important; font-weight: bold;">🔥 Promo Spesial Hari Ini 🔥</h2>
    <p style="color: white !important; font-size: 18px;">
      Diskon <b>20%</b> untuk pembelian pertama!
    </p>
    <a href="#menu" class="btn btn-light fw-bold px-4">Pesan Sekarang</a>
  </div>
</section>

<section id="testimoni" class="testimoni-section">
  <h2>Apa Kata Mereka?</h2>
  <p class="subtitle">Testimoni pelanggan setia Rujak Boz 💕</p>

  <div class="testimoni-grid">

    <div class="testimoni-card">
      <img src="profile 1.jpg" alt="Pelanggan">
      <h4>Putri Aulia</h4>
      <p>"Rujaknya enak banget! Pedas manisnya pas, bikin ketagihan 😍"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

    <div class="testimoni-card">
      <img src="profile 3.jpg" alt="Pelanggan">
      <h4>Rizky Pratama</h4>
      <p>"Harga murah, rasa premium! Recomended buat nongkrong 💯"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

    <div class="testimoni-card">
      <img src="profile 2.jpg" alt="Pelanggan">
      <h4>Siti Nurhaliza</h4>
      <p>"Langganan tiap minggu! Rujaknya segar dan selalu fresh ❤️"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

    <div class="testimoni-card">
      <img src="profile 3.jpg" alt="Pelanggan">
      <h4>Natasha Sinta</h4>
      <p>"Rujaknya segar banget, pedas manisnya pas di lidah!"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

    <div class="testimoni-card">
      <img src="profile 5.jpg" alt="Pelanggan">
      <h4>Merlinda Aza</h4>
      <p>"Awalnya cuma coba-coba, tapi setelah satu gigitan langsung jatuh cinta. Rujaknya segar, manisnya pas, dan pedasnya bikin nagih😋"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

    <div class="testimoni-card">
      <img src="profile 6.jpg" alt="Pelanggan">
      <h4>Dicky hubner</h4>
      <p>"Rujak ini bikin mood langsung naik. Pedas manisnya balance, dan buahnya selalu fresh!"</p>
      <span>⭐⭐⭐⭐⭐</span>
    </div>

  </div>
</section>



</div>

</div>
</section>
<!-- kontak -->
    <section id="kontak" class="py-5 bg-white">
        <section class="section-soft">
            <section id="kontak" class="fade-simple">

        <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Hubungi <span class="text-oren">Rujak Boz</span></h2>
                <p class="lead text-secondary">Kami siap melayani pesanan Anda! Sampaikan pertanyaan atau saran di sini.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-lg-4 mb-4">
                <div class="card p-4 shadow-sm h-100 border-0">
                    <h4 class="fw-bold mb-3">Info Toko</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-3">
                            <span class="text-oren me-3 fs-5"><i class="bi bi-geo-alt-fill"></i></span>
                            <div>
                                <strong class="d-block">Alamat</strong>
                                <a href="https://maps.google.com/?q=Jl.Dahlia+no+45+Desa+Karangsono" target="_blank" class="text-secondary text-decoration-none">Jl. Dahlia no 45 Desa Karangsono</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="text-oren me-3 fs-5"><i class="bi bi-telephone-fill"></i></span>
                            <div>
                                <strong class="d-block">Telepon/WA</strong>
                                <a href="tel:085748495699" class="text-secondary text-decoration-none">085748495699</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="text-oren me-3 fs-5"><i class="bi bi-envelope-fill"></i></span>
                            <div>
                                <strong class="d-block">Email</strong>
                                <a href="mailto:rujakboz@email.com" class="text-secondary text-decoration-none">rujaboz12@gmail.com</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <span class="text-oren me-3 fs-5"><i class="bi bi-instagram"></i></span>
                            <div>
                                <strong class="d-block">Instagram</strong>
                                <a href="#" target="_blank" class="text-secondary text-decoration-none">@RujakBoz</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 mb-4">
                <div class="card p-4 shadow-sm h-100 border-0">
                    <h4 class="fw-bold mb-3">Kirim Pesan Cepat</h4>
                    <form>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputNama" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan email anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputPesan" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="inputPesan" rows="4" placeholder="Apa yang ingin Anda sampaikan?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-rujak">Kirim Pesan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


</section>
<section class="py-5 text-center" 
style="
background: linear-gradient(135deg, #8d5524, #5a2d0c) !important;
border-radius: 50px;
margin: 50px 40px;
">
  <div class="container" style="background: transparent !important; box-shadow: none !important; padding: 30px;">
    <h2 style="color: white !important; font-weight: bold;">🔥 Rujak Boz 🔥</h2>
    <p style="color: white !important; font-size: 18px;">
      Rujak Segar, Pedasnya Juara!
Order sekarang, nikmati sensasi segarnya 🍍🌶️
    </p>
    <p style="color: white !important; font-size: 18px;">

© 2025 Rujak Boz
    </p>
</section>




</body>





 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
