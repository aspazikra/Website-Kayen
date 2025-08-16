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

    <!-- berita terkini -->
    <div class="news-container">
    <div class="news-header">
        <h2><i class="fas fa-newspaper"></i> Berita & Pengumuman Terkini</h2>
        <a href="indexberita.php" class="view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
    </div>

    <div class="news-grid">
    <?php
    include 'database/koneksi.php';

    // Ambil 3 berita terbaru kategori 'berita' saja
    $sql = "SELECT id, judul, kategori, isi, gambar, tanggal_publish 
            FROM berita 
            WHERE kategori = 'berita'
            ORDER BY tanggal_publish DESC 
            LIMIT 3";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $kategoriClass = strtolower($row['kategori']);
            $excerpt = implode(' ', array_slice(explode(' ', strip_tags($row['isi'])), 0, 15)) . '...';

            setlocale(LC_TIME, 'id_ID.utf8');
            $tanggal = strftime('%d %B %Y', strtotime($row['tanggal_publish']));

            echo "
            <article class='news-card'>
                <div class='news-image'>
                    <img src='image/berita/" . htmlspecialchars($row['gambar']) . "' alt='" . htmlspecialchars($row['judul']) . "'>
                    <span class='news-category {$kategoriClass}'>" . htmlspecialchars($row['kategori']) . "</span>
                </div>
                <div class='news-content'>
                    <div class='news-meta'>
                        <span class='news-date'><i class='far fa-calendar-alt'></i> {$tanggal}</span>
                    </div>
                    <h3 class='news-title'>" . htmlspecialchars($row['judul']) . "</h3>
                    <p class='news-excerpt'>{$excerpt}</p>
                    <a href='detail_berita.php?id=" . $row['id'] . "' class='read-more'>Baca Selengkapnya</a>
                </div>
            </article>
            ";
        }
    } else {
        echo "<p>Tidak ada berita tersedia</p>";
    }

    $conn->close();
    ?>
</div>

    </div>

    <!-- pengumuman -->
<?php
include 'database/koneksi.php';

// Ambil data pengumuman terbaru
$sql = "SELECT id, judul, isi, gambar, tanggal_publish 
        FROM berita 
        WHERE kategori = 'pengumuman' AND status = 1 
        ORDER BY tanggal_publish DESC 
        LIMIT 4";
$result = $conn->query($sql);
?>
<div class="news-container">
      <div class="news-header">
        <h2><i class="fas fa-bullhorn"></i> Pengumuman Terkini</h2>
        <a href="indexberita.php" class="view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
    </div>
<div class="announcement-container mt-5">
    <div class="row">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-6">
                    <div class="announcement-card p-3 mb-3 shadow-sm border rounded">
                        <?php if (!empty($row['gambar'])): ?>
                            <img src="image/berita/<?php echo htmlspecialchars($row['gambar']); ?>" 
                                 alt="<?php echo htmlspecialchars($row['judul']); ?>" 
                                 class="img-fluid mb-2 rounded">
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($row['judul']); ?></h3>
                        <p class="text-muted small">
                            <i class="far fa-calendar-alt"></i> 
                            <?php echo date('d M Y', strtotime($row['tanggal_publish'])); ?>
                        </p>
                        <p>
                            <?php 
                            echo substr(strip_tags($row['isi']), 0, 120) . '...'; 
                            ?>
                        </p>
                        <a href="detail_berita.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p class="text-center text-muted">Belum ada pengumuman.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
        </div>
<?php $conn->close(); ?>

    
    <!-- dokumen -->
    <div class="news-container">
    <div class="news-header">
        <h2><i class="fas fa-file-pdf" style="color: #e74c3c;"></i> Dokumen Desa</h2>
        <a href="dokumen.php" class="view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="row">
        <?php
        include 'database/koneksi.php';
        $result = $conn->query("SELECT * FROM dokumen_desa ORDER BY tanggal_upload DESC LIMIT 6");
        while ($row = $result->fetch_assoc()) {
            // Cek ekstensi file untuk menentukan ikon
            $file_ext = pathinfo($row['file_path'], PATHINFO_EXTENSION);
            $icon_class = ($file_ext == 'pdf') ? 'fa-file-pdf' : 'fa-file-alt';
            $icon_color = ($file_ext == 'pdf') ? 'style="color: #e74c3c;"' : 'style="color: #3498db;"';
        ?>
            <div class="col-md-4 mb-4">
                <div class="document-card p-3 text-center h-100" style="border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    <!-- Ikon dokumen PDF -->
                    <div class="mb-3">
                        <i class="fas <?php echo $icon_class; ?> fa-3x" <?php echo $icon_color; ?>></i>
                    </div>
                    <h5 style="min-height: 3rem;">
                        <a href="detail_dokumen.php?id=<?php echo $row['id']; ?>" style="color: #2c3e50; text-decoration: none;">
                            <?php echo htmlspecialchars($row['judul']); ?>
                        </a>
                    </h5>
                    <p class="text-muted" style="min-height: 3rem;">
                        <?php echo htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 80, "...")); ?>
                    </p>
                    <a href="detail_dokumen.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-eye"></i> Lihat Dokumen
                    </a>
                </div>
            </div>
        <?php
        }
        $conn->close();
        ?>
    </div>
</div>


    <!-- UMKM Desa -->
    <div class="news-container">
        <div class="news-header">
            <h2><i class="fas fa-store"></i> UMKM Desa</h2>
            <a href="umkmdesa.php" class="view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="umkm-container mt-5">
        <div class="row">
            <?php
            include 'database/koneksi.php';

            $sql = "SELECT * FROM umkm_desa ORDER BY tanggal_input DESC LIMIT 4"; // hanya 4 data
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="umkm-card d-flex flex-column text-center p-3 shadow-sm rounded bg-white h-100">
                            <img src="image/umkm/<?php echo htmlspecialchars($row['gambar']); ?>" 
                                alt="<?php echo htmlspecialchars($row['nama_umkm']); ?>" 
                                class="img-fluid mb-3"
                                style="height:200px; width:100%; object-fit:cover; border-radius:8px;">
                            <h4><?php echo htmlspecialchars($row['nama_umkm']); ?></h4>
                            <span class="badge bg-info mb-2"><?php echo htmlspecialchars($row['kategori']); ?></span>
                            <p class="text-muted mb-1">Pemilik: <?php echo htmlspecialchars($row['pemilik']); ?></p>
                            <p class="small flex-grow-1">
                                <?php echo substr(htmlspecialchars($row['deskripsi']), 0, 80) . '...'; ?>
                            </p>
                            <a href="detail_umkm.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary mt-auto">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center text-muted'>Belum ada data UMKM.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
    </div>


    <!-- Profile Desa -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Profile Desa Kayen</h1>
        <p class="col-md-8 fs-4">Selamat datang di website resmi Desa Kayen, Pacitan. Temukan informasi terkini tentang desa kami.</p>
        <button class="btn btn-primary btn-lg" type="button">
          <a href="profiledesa.php" class="text-white text-decoration-none">Lihat Selengkapnya</a>
        </button>
      </div>
    </div>

    <!-- Geografis desa -->
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Informasi Geografis Desa</h2>
          <p>Informasi lengkap mengenai Jumlah Penduduk,Kelompok Umur, Tingkat Pendidikan, Pekerjaan, dan Status Pekerjaan  Desa Kayen.</p>
          <button class="btn btn-primary btn-lg" type="button">
            <a href="infografis.php" class="text-white text-decoration-none">Lihat Selengkapnya</a>
          </button>
        </div>
      </div>

      <!-- Berita dan Pengumuman -->
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Berita & Pengumuman</h2>
          <p>Dapatkan berita terbaru dan pengumuman penting secara realtime dari Desa Kayen.</p>
        <button class="btn btn-primary btn-lg" type="button">
          <a href="indexberita.php" class="text-white text-decoration-none">Lihat Selengkapnya</a>
        </button>
        </div>
      </div>
    </div>
</main>

        <?php include 'footer.php'; ?>

    <!-- Bootstrap JS - SUDAH ADA -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
    <!-- ========== TAMBAHKAN SCRIPT INI SETELAH BOOTSTRAP JS ========== -->
    <script>
    // Script untuk navbar toggle - TAMBAHKAN INI
    document.addEventListener('DOMContentLoaded', function() {
        console.log('🔥 Initializing navbar toggle...');
        
        // Cek apakah Bootstrap sudah tersedia
        if (typeof bootstrap === 'undefined') {
            console.error('❌ Bootstrap JS tidak ditemukan!');
            return;
        }
        
        // Ambil elemen-elemen navbar
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');
        const navLinks = document.querySelectorAll('.nav-link');
        
        // Debug: cek apakah elemen ditemukan
        console.log('📋 Navbar elements:', {
            toggler: !!navbarToggler,
            collapse: !!navbarCollapse,
            navLinks: navLinks.length
        });
        
        // Pastikan elemen navbar ada
        if (!navbarToggler || !navbarCollapse) {
            console.error('❌ Navbar elements tidak ditemukan!');
            console.log('💡 Pastikan header.php memiliki:');
            console.log('   - class="navbar-toggler" dengan data-bs-target="#navbarNav"');
            console.log('   - id="navbarNav" pada div collapse');
            return;
        }
        
        console.log('✅ Navbar elements found, adding event listeners...');
        
        // Event listener untuk toggle button
        navbarToggler.addEventListener('click', function() {
            console.log('🔘 Toggle button clicked');
        });
        
        // Auto-close navbar ketika nav-link diklik (khusus mobile)
        navLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                console.log('🔗 Nav link clicked:', this.textContent.trim());
                
                // Cek apakah navbar sedang terbuka (expanded)
                const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
                const isMobile = window.innerWidth < 992; // Bootstrap lg breakpoint
                
                if (isExpanded && isMobile) {
                    console.log('📱 Mobile navbar open, closing...');
                    
                    try {
                        // Tutup navbar menggunakan Bootstrap collapse
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        });
                        bsCollapse.hide();
                        console.log('✅ Navbar collapsed');
                    } catch (error) {
                        console.error('❌ Error closing navbar:', error);
                    }
                }
            });
        });
        
        // Event listeners untuk monitoring collapse events
        navbarCollapse.addEventListener('shown.bs.collapse', function () {
            console.log('✅ Navbar shown');
        });
        
        navbarCollapse.addEventListener('hidden.bs.collapse', function () {
            console.log('✅ Navbar hidden');
        });
        
        console.log('🎉 Navbar toggle initialized successfully!');
    });
    </script>

  </body>
</html>