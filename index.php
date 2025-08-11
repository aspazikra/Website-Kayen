<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
  </head>
  <body>
    <?php include 'header.php'; ?>
    
  <main class="container">
    <!--tujuan dan sasaran -->
    <!-- <section id="tujuan-sasaran" class="tujuan-section">
  <div class="container">
    <div class="row">
      Kiri: Konten
      <div class="left">
        <h2 class="subtitle">Tujuan dan Sasaran</h2>
        <h1 class="title">Rencana Pembangunan Daerah<br>Kabupaten Pacitan 2024–2026</h1>

        <div class="accordion-box active">
          <div class="accordion-header">
            <span>&#x25B2;</span>
            <strong>Mewujudkan Percepatan Pemerataan Pembangunan Infrastruktur dan Pembangunan Wilayah Perbatasan dengan tetap Memperhatikan Kualitas Lingkungan Hidup</strong>
          </div>
          <div class="accordion-content">
            <ol>
              <li>Pemerataan Pembangunan Infrastruktur Penunjang Perekonomian dan aksesibilitas.</li>
              <li>Pengarusutamaan Pembangunan Berwawasan Lingkungan.</li>
            </ol>
          </div>
        </div>

        <div class="accordion-box">
          <div class="accordion-header">
            <span>&#x25BC;</span>
            <strong>Mewujudkan Pembangunan dan Peningkatan Daya Saing SDM yang Kukuh Berpijak Pada Nilai-Nilai Agama dan Budaya Bangsa</strong>
          </div>
        </div>

        <div class="accordion-box">
          <div class="accordion-header">
            <span>&#x25BC;</span>
            <strong>Meningkatkan Pertumbuhan Ekonomi melalui Sektor Agraris, Sektor Pariwisata, serta Sektor Unggulan Lainnya</strong>
          </div>
        </div>

        <div class="accordion-box">
          <div class="accordion-header">
            <span>&#x25BC;</span>
            <strong>Menciptakan Birokrasi Pemerintah yang Inovatif, Profesional, dan Melayani</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
    
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

        <?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>