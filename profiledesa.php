<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil & Sejarah Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f6f8;
    }
    .card-custom {
      background: white;
      border-radius: 12px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.05);
      overflow: hidden;
      margin-bottom: 20px;
    }
    .card-header-custom {
      background: #eaf2f8;
      color: #2874a6;
      font-weight: 600;
      padding: 14px 16px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background 0.3s;
    }
    .card-header-custom:hover {
      background: #d4e6f1;
    }
    .arrow {
      transition: transform 0.3s;
    }
    .card-content {
      padding: 16px;
      display: none;
      font-size: 15px;
      color: #555;
      line-height: 1.6;
    }
    .leader-info h3 {
      font-size: 18px;
      color: #2e86c1;
      margin-bottom: 6px;
    }
    .leader-info p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .info-item p {
      margin: 0;
    }
    .info-label {
      font-size: 13px;
      color: #666;
    }
    .info-value {
      font-weight: 600;
      color: #333;
      font-size: 14px;
    }
  </style>
</head>

<body>
<?php include 'header.php'; ?>

<main class="container my-4">
  
  <!-- Kepala Desa -->
  <header style="background: linear-gradient(135deg, #29a3f5 0%, #bdb2ff 100%); padding: 30px; border-radius: 12px; margin-bottom: 30px; color: white; text-align: center;">
    <h1 style="font-size: 2.5rem; margin-bottom: 10px; font-weight: 700;">PROFILE DESA</h1>
    <p style="font-size: 1.2rem; opacity: 0.9;">Informasi lengkap karakteristik demografi penduduk desa kami</p>
  </header>

  <!-- Visi -->
  <div class="card-custom">
    <div class="card-header-custom">
      <span>Visi Desa</span>
      <span class="arrow">▼</span>
    </div>
    <div class="card-content">
      “ Terwujudnya Pengelolaan Pemerintag Desa Yang Efektif Dan Efisien Guna Menjadikan Desa Kayen Unggul, Sejahtera Dan Bermartabat ”
    </div>
  </div>

  <!-- Misi -->
  <div class="card-custom">
    <div class="card-header-custom">
      <span>Misi Desa</span>
      <span class="arrow">▼</span>
    </div>
    <div class="card-content">
      <ol>
        <li>Menyelenggarakan Pemerintagan Desa Yang Kondusif, Demokratis Dan Humanis</li>
        <li>Menyelenggarakan Pembangunan Sesuai Aspirasi Masyarakat</li>
        <li>Mengembangkan Perekonomian Masyarakat Melalui Pemanfaatan Potensi Desa</li>
        <li>Meningkatkan Mutu Sumber Daya Manusia Untuk Mencapai Taraf Kehidupan Yang Lebih Sejahtera.</li>
        <li>Memfasilitasi Segala Bentuk Kegiatan Yang Positif Dan Mampu Meningkatkan Citra Desa Kayen Di Mata Masyarakat Luas</li>
      </ol>
    </div>
  </div>

  <!-- Bagan Desa -->
  <div class="card-custom">
    <div class="card-header-custom">
      <span>Bagan Desa</span>
      <span class="arrow">▼</span>
    </div>
    <div class="card-content text-center">
    <h5 class="text-primary mb-3">Struktur Organisasi Pemerintahan Desa</h5>
    <img src="image/Bagan Kayen.png" 
         class="img-fluid rounded mb-4 mx-auto d-block" 
         style="max-width: 100%; height: auto;" 
         alt="Struktur Organisasi Desa">
</div>

  </div>

<!-- Sejarah Desa -->
<div class="card-custom">
    <div class="card-header-custom">
        <span>Sejarah Desa</span>
        <span class="arrow">▼</span>
    </div>
    <div class="card-content text-muted" style="text-align: justify;">
        <h5 class="text-center text-primary mb-3">Sejarah Desa Kayen</h5>

        <h6>Gambaran Geografis dan Sejarah Awal</h6>
        <p>Desa Kayen terletak di wilayah paling timur Kecamatan Pacitan, Kabupaten Pacitan. Secara geografis, desa ini berbatasan dengan Desa Purwoasri dan Desa Banjarjo di sebelah timur, Desa Purwoasri dan Desa Sukoharjo di sebelah selatan, Desa Mentoro dan Desa Wonogondo di sebelah utara, serta Desa Sirnoboyo dan Desa Arjowinangun di sebelah barat. Posisi strategis ini menjadikan Desa Kayen sebagai wilayah yang memiliki nilai historis penting dalam perkembangan peradaban di Pacitan.</p>

        <h6>Jejak Sejarah dalam Babad Pacitan</h6>
        <p>Meskipun nama Desa Kayen tidak tercantum dalam Babad Pacitan, wilayah ini memiliki kaitan erat dengan peristiwa bersejarah yang terjadi di dua desa tetangganya. Desa Purwoasri (dahulu bernama Jati) merupakan pusat kekuasaan Ki Ageng Buwono Keling, putra menantu Raja Majapahit yang bertugas menjadi benteng pertahanan Majapahit di wilayah Jawa bagian selatan. Sementara itu, Desa Sukoharjo (dahulu bernama Ngrejoso) dikuasai oleh Ki Ageng Petung yang mendapat mandat dari Adipati Bethara Katong untuk menyebarkan agama Islam sekaligus menghambat usaha Ki Ageng Buwono Keling dalam mempertahankan kekuasaan Majapahit.</p>

        <h6>Era Konflik dan Pembentukan Wilayah</h6>
        <p>Karena posisi Desa Kayen yang berada di antara Ngrejoso dan Jati, wilayah ini kemungkinan besar terlibat dalam konflik antara Ki Ageng Buwono Keling dan Ki Ageng Petung. Pada masa itu, wilayah Desa Kayen masih berupa hutan lebat, terbukti dari lamanya perjalanan Ki Ageng Petung dari Sukoharjo ke Jati yang memakan waktu sekitar enam jam, jauh berbeda dengan kondisi sekarang yang hanya membutuhkan waktu kurang dari setengah jam. Hal ini menunjukkan bahwa Desa Kayen memiliki usia yang lebih muda dibandingkan kedua desa tersebut.</p>

        <h6>Hutan Gayam Emprit sebagai Basis Pertahanan</h6>
        <p>Menurut cerita turun-temurun, wilayah Desa Kayen yang saat itu masih berupa hutan bernama Hutan Gayam Emprit menjadi basis pertahanan Ki Ageng Petung. Pemilihan lokasi ini sangat strategis karena jaraknya lebih dekat untuk mencapai Jati dan terpisah oleh sungai besar yang berfungsi sebagai pengaman alami dari serangan musuh. Peperangan berakhir dengan kemenangan kubu Ki Ageng Petung yang mendapat dukungan dari Syekh Maulana Maghribi di Desa Mentoro, Ki Ageng Posong di Desa Posong (Widoro), Ki Ageng Lebirah di Mentoro, serta bantuan prajurit dari Ponorogo.</p>

        <h6>Asal Usul Nama dan Pembentukan Pemukiman</h6>
        <p>Setelah perang berakhir, terjadi perkawinan antara prajurit dari Ponorogo dengan gadis-gadis dari Jati dan Ngrejoso. Meningkatnya jumlah penduduk mendorong Ki Ageng Petung untuk membuka wilayah baru di Hutan Gayam Emprit sebagai area pemukiman. Ketika daerah baru ini mulai dihuni, diadakan selamatan untuk memohon keselamatan kepada Tuhan Yang Maha Esa. Ki Ageng Petung mengharapkan agar warga dari berbagai tempat dapat mempersatukan kemauan mereka ("manunggal ing kayun" dalam bahasa Jawa) dan menjadikan desa ini tempat yang layak untuk menggantungkan kehidupan ("hayyan" dalam bahasa Arab). Dari gabungan kata "kayun" dan "hayyan" inilah kemudian terbentuk nama Desa Kayen.</p>

        <h6>Perkembangan Administratif</h6>
        <p>Sebelum menjadi satu kesatuan seperti sekarang, wilayah ini terdiri dari tiga desa terpisah, yaitu Desa Kayen, Desa Jelok, dan Desa Nogosari. Untuk menyesuaikan keadaan dan kebutuhan administratif, ketiga desa tersebut digabungkan menjadi satu dengan nama Desa Kayen. Bapak Donosari terpilih sebagai lurah (kepala desa) pertama yang berkedudukan di Desa Kayen. Dengan penggabungan ini, ketiga desa berubah status menjadi dusun, yaitu Dusun Kayen (kemudian menjadi Dusun Krajan), Dusun Nogosari, dan Dusun Jelok. Seiring perkembangan waktu, tiga dusun tersebut berkembang menjadi enam dusun dengan pembagian: Dusun Krajan membawahi Dusun Ngodong, Dusun Jelok membawahi Dusun Gundi, dan Dusun Nogosari membawahi Dusun Siwilan.</p>

        <h6>Pembentukan Dusun Modern</h6>
        <p>Dusun Siwilan merupakan dusun termuda di antara enam dusun tersebut. Awalnya, Dusun Siwilan merupakan bagian dari Desa Sirnoboyo, namun karena jarak yang jauh dari pusat pemerintahan di Dusun Ngemplak dan kedekatan dengan pusat Desa Kayen di Dusun Nogosari, warga Dusun Siwilan meminta bergabung dengan Desa Kayen. Pemerintah Desa Sirnoboyo menyetujui dengan syarat yang berpindah hanya warga dan tanah pemukiman, sementara tanah pertanian tetap menjadi bagian Desa Sirnoboyo. Pada tahun 1976, wilayah Tileng yang semula bagian dari Dusun Jelok berubah status menjadi Dusun Tileng yang berdiri sendiri karena pertimbangan geografis dan kemudahan dalam pembangunan. Saat ini, Desa Kayen terdiri dari tujuh dusun dengan sistem pemerintahan yang disesuaikan dengan kondisi masing-masing wilayah.</p>
    </div>
</div>


  <!-- Informasi Desa -->
  <div class="card-custom p-3">
    <h5 class="text-primary border-bottom pb-2 mb-3">Informasi Desa</h5>
    <div class="info-grid">
      <div class="info-item">
        <p class="info-label">Luas Wilayah</p>
        <p class="info-value">362,53 Km²</p>
      </div>
      <div class="info-item">
        <p class="info-label">Jumlah Penduduk</p>
        <p class="info-value">2.567 Jiwa</p>
      </div>
      <div class="info-item">
        <p class="info-label">Kode Pos</p>
        <p class="info-value">63518</p>
      </div>
      <div class="info-item">
        <p class="info-label">Kecamatan</p>
        <p class="info-value">Kecamatan Pacitan</p>
      </div>
    </div>
  </div>

</div>

<script>
  document.querySelectorAll('.card-header-custom').forEach(btn => {
    btn.addEventListener('click', () => {
      const content = btn.nextElementSibling;
      const arrow = btn.querySelector('.arrow');
      const isOpen = content.style.display === 'block';

      document.querySelectorAll('.card-content').forEach(c => c.style.display = 'none');
      document.querySelectorAll('.arrow').forEach(a => a.style.transform = 'rotate(0deg)');

      if (!isOpen) {
        content.style.display = 'block';
        arrow.style.transform = 'rotate(180deg)';
      }
    });
  });
</script>
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
