<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Layout Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="desa-profile" style="font-family: 'Poppins', sans-serif; max-width: 1200px; margin: 0 auto; padding: 20px; background-color: #f8fafc;">

  <!-- Header Section -->
  <header style="background: linear-gradient(135deg, #29a3f5 0%, #bdb2ff 100%); padding: 30px; border-radius: 12px; margin-bottom: 30px; color: white; text-align: center;">
    <h1 style="font-size: 2.5rem; margin-bottom: 10px; font-weight: 700;">DEMOGRAFI PENDUDUK</h1>
    <p style="font-size: 1.2rem; opacity: 0.9;">Informasi lengkap karakteristik demografi penduduk desa kami</p>
  </header>

<!-- Population Summary -->
<section style="margin-bottom: 40px;">
  <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">JUMLAH PENDUDUK</h2>
  
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
    <!-- Total Penduduk -->
    <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #3b82f6;">
      <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="Total Penduduk" style="width: 50px; height: 50px; margin-bottom: 10px;">
      <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">2.769</h3>
      <p style="color: #64748b;">Total Penduduk</p>
    </div>
    
    <!-- Kepala Keluarga -->
    <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #60a5fa;">
      <img src="https://cdn-icons-png.flaticon.com/512/1946/1946436.png" alt="Kepala Keluarga" style="width: 50px; height: 50px; margin-bottom: 10px;">
      <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">978</h3>
      <p style="color: #64748b;">Kepala Keluarga</p>
    </div>
    
    <!-- Laki-laki -->
    <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #93c5fd;">
      <img src="https://cdn-icons-png.flaticon.com/512/432/432693.png" alt="Laki-laki" style="width: 50px; height: 50px; margin-bottom: 10px;">
      <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">1.370</h3>
      <p style="color: #64748b;">Laki-laki</p>
    </div>
    
    <!-- Perempuan -->
    <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #bfdbfe;">
      <img src="https://cdn-icons-png.flaticon.com/512/1154/1154475.png" alt="Perempuan" style="width: 50px; height: 50px; margin-bottom: 10px;">
      <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">1.399</h3>
      <p style="color: #64748b;">Perempuan</p>
    </div>
  </div>
</section>



<!-- Age Group Section -->
<section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); box-sizing: border-box;">
  <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">KUALITAS ANGKATAN KERJA</h2>
  
  <div style="display: flex; flex-wrap: wrap; gap: 20px;">
    <!-- Chart Section -->
    <div style="flex: 1 1 350px; min-width: 280px;">
      <div style="height: auto; background: #f0f9ff; border-radius: 8px; padding: 20px; box-sizing: border-box;">
        
        <!-- Legend -->
        <div style="display: flex; justify-content: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;">
          <div style="display: flex; align-items: center;">
            <div style="width: 20px; height: 20px; background: #3b82f6; margin-right: 8px; border-radius: 4px;"></div>
            <span>Laki-laki</span>
          </div>
          <div style="display: flex; align-items: center;">
            <div style="width: 20px; height: 20px; background: #ec4899; margin-right: 8px; border-radius: 4px;"></div>
            <span>Perempuan</span>
          </div>
        </div>
        
        <!-- Horizontal bar chart -->
        <div style="width: 100%; max-width: 100%;">
          <div style="margin-bottom: 15px;">
            <div>buta aksara dan huruf/angka latin</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 30%; background: #3b82f6;"></div>
              <div style="width: 25%; background: #ec4899;"></div>
            </div>
          </div>
          
          <div style="margin-bottom: 15px;">
            <div>tidak tamat SD</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 35%; background: #3b82f6;"></div>
              <div style="width: 30%; background: #ec4899;"></div>
            </div>
          </div>
          
          <div style="margin-bottom: 15px;">
            <div>tamat SD</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 60%; background: #3b82f6;"></div>
              <div style="width: 55%; background: #ec4899;"></div>
            </div>
          </div>
          
          <div style="margin-bottom: 15px;">
            <div>tamat SLTP</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 70%; background: #3b82f6;"></div>
              <div style="width: 65%; background: #ec4899;"></div>
            </div>
          </div>
          
          <div style="margin-bottom: 15px;">
            <div>tamat SLTA</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 85%; background: #3b82f6;"></div>
              <div style="width: 80%; background: #ec4899;"></div>
            </div>
          </div>
          
          <div style="margin-bottom: 15px;">
            <div>tamat Perguruan Tinggi</div>
            <div style="display: flex; height: 20px;">
              <div style="width: 45%; background: #3b82f6;"></div>
              <div style="width: 40%; background: #ec4899;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Summary Section -->
    <div style="flex: 1 1 300px; min-width: 280px; display: flex; flex-direction: column; gap: 15px;">
      <div style="background: #eff6ff; padding: 15px; border-radius: 8px;">
        <h3 style="color: #1e40af; margin-top: 0;">Laki-laki</h3>
        <p>Tingkat pendidikan tertinggi: <strong>tamat SLTA</strong> dengan <strong>450 orang</strong></p>
        <p>Tingkat pendidikan terendah: <strong>buta aksara</strong> dengan <strong>50 orang</strong></p>
      </div>
      
      <div style="background: #f0f9ff; padding: 15px; border-radius: 8px;">
        <h3 style="color: #1e40af; margin-top: 0;">Perempuan</h3>
        <p>Tingkat pendidikan tertinggi: <strong>tamat SLTA</strong> dengan <strong>400 orang</strong></p>
        <p>Tingkat pendidikan terendah: <strong>buta aksara</strong> dengan <strong>30 orang</strong></p>
      </div>
    </div>
  </div>
</section>



  <!-- Education Section -->
<section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
  <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">TINGKAT PENDIDIKAN</h2>
  
  <div style="background: #f0f9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 15px;">
    <img src="image/grafik_pendidikan.png" alt="Grafik Tingkat Pendidikan" 
         style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);" />
  </div>
</section>


<!-- Occupation Section -->
<section style="margin-bottom: 40px;">
  <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">
    MATA PENCAHARIAN POKOK
  </h2>
  
  <!-- Chart Image -->
  <div style="background: #f0f9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center; padding: 15px; margin-bottom: 20px;">
    <img src="image/grafik_pencaharian.png" alt="Grafik Mata Pencaharian Pokok" 
         style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);" />
  </div>

  <!-- Summary -->
  <div style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
    <h3 style="color: #1e40af; margin-top: 0;">Ringkasan</h3>
    <p style="margin: 5px 0;">Total penduduk: <span style="color: #10b981; font-weight: bold;">2.188 orang</span></p>
    <p style="margin: 5px 0;">Mayoritas pekerjaan: <span style="color: #3b82f6; font-weight: bold;">Petani, Wiraswasta, dan Karyawan Swasta</span></p>
    <p style="margin: 5px 0;">Perempuan paling banyak bekerja sebagai <span style="color: #ec4899; font-weight: bold;">Karyawan Swasta & Ibu Rumah Tangga</span></p>
  </div>
</section>


<!-- Marriage Status -->
<!-- <section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
  <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">STATUS PERKAWINAN</h2>
  
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
    <div style="text-align: center;">
      <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Belum Kawin" style="width: 40px; height: 40px;">
      </div>
      <p style="font-weight: 500; margin-bottom: 5px;">Belum Kawin</p>
      <p style="font-size: 1.2rem; color: #3b82f6;">723</p>
    </div>
    
    <div style="text-align: center;">
      <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Kawin" style="width: 40px; height: 40px;">
      </div>
      <p style="font-weight: 500; margin-bottom: 5px;">Kawin</p>
      <p style="font-size: 1.2rem; color: #3b82f6;">1407</p>
    </div>
    
    <div style="text-align: center;">
      <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" alt="Cerai Mati" style="width: 40px; height: 40px;">
      </div>
      <p style="font-weight: 500; margin-bottom: 5px;">Cerai Mati</p>
      <p style="font-size: 1.2rem; color: #3b82f6;">43</p>
    </div>
    
    <div style="text-align: center;">
      <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828543.png" alt="Cerai Hidup" style="width: 40px; height: 40px;">
      </div>
      <p style="font-weight: 500; margin-bottom: 5px;">Cerai Hidup</p>
      <p style="font-size: 1.2rem; color: #3b82f6;">15</p>
    </div>
  </div>
</section> -->

</div>

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
</body>
</html>