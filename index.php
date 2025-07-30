<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="bg-dark text-white py-3">
      <div class="container d-flex flex-wrap align-items-center justify-content-between">
        
        <!-- Logo dan Nama Desa -->
        <div class="d-flex align-items-center">
          <img src="image/LogoPacitan.png" width="75" height="60" class="me-3" alt="Logo Pacitan">
          <h1 class="h4 mb-0 fw-bold">Desa Kayen</h1>
        </div>

        <!-- Navigasi -->
        <nav>
          <ul class="nav text-small">
            <li class="nav-item">
              <a href="index.php" class="nav-link text-white px-3">Home</a>
            </li>
            <li class="nav-item">
              <a href="profiledesa.php" class="nav-link text-white px-3">Profil Desa</a>
            </li>
            <li class="nav-item">
              <a href="IndexBerita.php" class="nav-link text-white px-3">Berita</a>
            </li>
            <li class="nav-item">
              <a href="kontak.php" class="nav-link text-white px-3">Kontak</a>
            </li>
            <li class="nav-item">
              <a href="loginadmin.php   " class="nav-link text-white px-3">Admin</a>
            </li>
          </ul>
        </nav>

      </div>
    </header>

  <main class="container">
    <!-- berita terkini -->
    <div class="news-container">
        <div class="news-header">
            <h2><i class="fas fa-newspaper"></i> Berita & Pengumuman Terkini</h2>
            <a href="#" class="view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="news-grid">
            <!-- Berita 1 -->
            <article class="news-card">
                <div class="news-image">
                    <img src="image/GotongRoyong.jpg" alt="Gotong Royong Warga">
                    <span class="news-category kegiatan">Kegiatan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 15 Juli 2023</span>
                        <span class="news-comments"><i class="far fa-comment"></i> 12</span>
                    </div>
                    <h3 class="news-title">Gotong Royong Bersihkan Saluran Air</h3>
                    <p class="news-excerpt">Warga Desa Kayen bersama-sama membersihkan saluran air menyambut musim penghujan...</p>
                    <a href="#" class="read-more">Baca Selengkapnya</a>
                </div>
            </article>

            <!-- Berita 2 -->
            <article class="news-card">
                <div class="news-image">
                    <img src="image/pembagian tunai.jpg" alt="Bantuan Langsung Tunai">
                    <span class="news-category pengumuman">Pengumuman</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 10 Juli 2023</span>
                        <span class="news-comments"><i class="far fa-comment"></i> 8</span>
                    </div>
                    <h3 class="news-title">Pembagian BLT Tahap III</h3>
                    <p class="news-excerpt">Pemerintah desa akan menyalurkan bantuan langsung tunai kepada warga...</p>
                    <a href="#" class="read-more">Baca Selengkapnya</a>
                </div>
            </article>

            <!-- Berita 3 -->
            <article class="news-card">
                <div class="news-image">
                    <img src="image/Posyandu.jpg" alt="Kegiatan Posyandu">
                    <span class="news-category kesehatan">Kesehatan</span>
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date"><i class="far fa-calendar-alt"></i> 5 Juli 2023</span>
                        <span class="news-comments"><i class="far fa-comment"></i> 5</span>
                    </div>
                    <h3 class="news-title">Posyandu Bulanan Desa Kayen</h3>
                    <p class="news-excerpt">Pelaksanaan posyandu bulan Juli akan digelar di balai desa pada tanggal...</p>
                    <a href="#" class="read-more">Baca Selengkapnya</a>
                </div>
            </article>
        </div>
    </div>

    <!-- terkait pelayanan -->
    <div class="service-container mt-5">
        <h2 class="text-center mb-4">Pelayanan Desa</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="service-card text-center p-3">
                    <img src="image/SuratKeterangan.jpg" alt="Surat Keterangan" class="img-fluid mb-3">
                    <h3>Surat Keterangan</h3>
                    <p>Pengajuan surat keterangan untuk berbagai keperluan administrasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center p-3">
                    <img src="image/PermohonanBantuan.jpg" alt="Permohonan Bantuan" class="img-fluid mb-3">
                    <h3>Permohonan Bantuan</h3>
                    <p>Informasi mengenai program bantuan sosial yang tersedia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card text-center p-3">
                    <img src="image/PelayananKesehatan.jpg" alt="Pelayanan Kesehatan" class="img-fluid mb-3">
                    <h3>Pelayanan Kesehatan</h3>
                    <p>Layanan kesehatan dasar bagi warga desa.</p>
                </div>
            </div>
        </div>
        </div>

    <!-- pengumuman -->
    <div class="announcement-container mt-5">
        <h2 class="text-center mb-4">Pengumuman</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="announcement-card p-3 mb-3">
                    <h3>Rapat Desa Bulanan</h3>
                    <p>Rapat desa akan dilaksanakan pada tanggal 20 Juli 2023 di balai desa.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="announcement-card p-3 mb-3">
                    <h3>Program Vaksinasi Covid-19</h3>
                    <p>Vaksinasi Covid-19 akan dilaksanakan setiap hari Senin dan Kamis di Puskesmas Kayen.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- dokumen -->
    <div class="document-container mt-5">
        <h2 class="text-center mb-4">Dokumen Desa</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="document-card p-3">
                    <h3>Peraturan Desa</h3>
                    <p>Dokumen peraturan desa terbaru.</p>
                    <a href="#" class="btn btn-primary">Lihat Dokumen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="document-card p-3">
                    <h3>Laporan Keuangan</h3>
                    <p>Laporan keuangan tahunan desa.</p>
                    <a href="#" class="btn btn-primary">Lihat Dokumen</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="document-card p-3">
                    <h3>Rencana Pembangunan</h3>
                    <p>Rencana pembangunan desa untuk tahun ini.</p>
                    <a href="#" class="btn btn-primary">Lihat Dokumen</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Desa -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Desa Kayen</h1>
        <p class="col-md-8 fs-4">Selamat datang di website resmi Desa Kayen, Pacitan. Temukan informasi terkini tentang desa kami.</p>
        <button class="btn btn-primary btn-lg" type="button">Learn more</button>
      </div>
    </div>

    <!-- kontak desa -->
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Kontak</h2>
          <p>Informasi lengkap mengenai sejarah, visi, misi, dan potensi Desa Kayen.</p>
          <button class="btn btn-outline-light" type="button">View details</button>
        </div>
      </div>

      <!-- Berita dan Pengumuman -->
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Berita & Pengumuman</h2>
          <p>Dapatkan berita terbaru dan pengumuman penting dari Desa Kayen.</p>
          <button class="btn btn-outline-secondary" type="button">View details</button>
        </div>
      </div>
    </div>
</main>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-section">
            <h3 class="footer-title">Desa Kayen</h3>
            <p class="footer-description">Desa Kayen, Kecamatan Kayen, Kabupaten Pacitan, Jawa Timur</p>
            <div class="footer-social">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="footer-section">
            <h3 class="footer-title">Tautan Cepat</h3>
            <ul class="footer-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Profil Desa</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="footer-title">Kontak Kami</h3>
            <ul class="footer-contact">
                <li><i class="fas fa-map-marker-alt"></i> Jl. Raya Kayen No. 123</li>
                <li><i class="fas fa-phone"></i> (0357) 1234567</li>
                <li><i class="fas fa-envelope"></i> info@desakayen.id</li>
                <li><i class="fas fa-clock"></i> Senin-Jumat: 08.00 - 16.00 WIB</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2023 Desa Kayen. All rights reserved.</p>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>