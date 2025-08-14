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
      <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #3b82f6;">
        <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Total Penduduk" style="width: 50px; height: 50px; margin-bottom: 10px;">
        <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">1.149</h3>
        <p style="color: #64748b;">Total Penduduk</p>
      </div>
      
      <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #60a5fa;">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Kepala Keluarga" style="width: 50px; height: 50px; margin-bottom: 10px;">
        <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">304</h3>
        <p style="color: #64748b;">Kepala Keluarga</p>
      </div>
      
      <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #93c5fd;">
        <img src="https://cdn-icons-png.flaticon.com/512/3233/3233483.png" alt="Laki-laki" style="width: 50px; height: 50px; margin-bottom: 10px;">
        <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">606</h3>
        <p style="color: #64748b;">Laki-laki</p>
      </div>
      
      <div class="stat-card" style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: center; border-top: 4px solid #bfdbfe;">
        <img src="https://cdn-icons-png.flaticon.com/512/3233/3233485.png" alt="Perempuan" style="width: 50px; height: 50px; margin-bottom: 10px;">
        <h3 style="color: #3b82f6; font-size: 1.5rem; margin: 10px 0;">543</h3>
        <p style="color: #64748b;">Perempuan</p>
      </div>
    </div>
  </section>

  <!-- Age Group Section -->
  <section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
    <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">KELOMPOK UMUR</h2>
    
    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;">
      <div style="flex: 1; min-width: 300px;">
        <div style="height: 300px; background: #f0f9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
          [GRAFIK KELOMPOK UMUR]
        </div>
      </div>
      
      <div style="flex: 1; min-width: 300px;">
        <div style="background: #eff6ff; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
          <h3 style="color: #1e40af; margin-top: 0;">Laki-laki</h3>
          <p>Kelompok umur <strong>10-14</strong> tertinggi dengan <strong>81 orang (13.37%)</strong></p>
          <p>Kelompok umur <strong>85+</strong> terendah dengan <strong>4 orang (0.66%)</strong></p>
        </div>
        
        <div style="background: #f0f9ff; padding: 15px; border-radius: 8px;">
          <h3 style="color: #1e40af; margin-top: 0;">Perempuan</h3>
          <p>Kelompok umur <strong>10-14</strong> tertinggi dengan <strong>58 orang (10.68%)</strong></p>
          <p>Kelompok umur <strong>80-84</strong> terendah dengan <strong>2 orang (0.37%)</strong></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Education Section -->
  <section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
    <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">TINGKAT PENDIDIKAN</h2>
    
    <div style="height: 400px; background: #f0f9ff; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
      [GRAFIK TINGKAT PENDIDIKAN]
    </div>
  </section>

  <!-- Occupation Section -->
  <section style="margin-bottom: 40px;">
    <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">PEKERJAAN</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
      <div style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-left: 4px solid #3b82f6;">
        <h3 style="color: #1e40af; margin-top: 0;">Pelajar/Mahasiswa</h3>
        <p style="font-size: 1.5rem; color: #3b82f6; margin: 10px 0;">323</p>
      </div>
      
      <div style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-left: 4px solid #60a5fa;">
        <h3 style="color: #1e40af; margin-top: 0;">Mengurus Rumah Tangga</h3>
        <p style="font-size: 1.5rem; color: #3b82f6; margin: 10px 0;">270</p>
      </div>
      
      <div style="background: white; border-radius: 10px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-left: 4px solid #93c5fd;">
        <h3 style="color: #1e40af; margin-top: 0;">Belum/Tidak Bekerja</h3>
        <p style="font-size: 1.5rem; color: #3b82f6; margin: 10px 0;">268</p>
      </div>
    </div>
  
  </section>

  <!-- Marriage Status -->
  <section style="margin-bottom: 40px; background: white; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
    <h2 style="color: #3b82f6; font-size: 1.8rem; margin-bottom: 20px; border-bottom: 2px solid #bfdbfe; padding-bottom: 8px;">STATUS PERKAWINAN</h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
      <div style="text-align: center;">
        <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
          <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Belum Kawin" style="width: 40px; height: 40px;">
        </div>
        <p style="font-weight: 500; margin-bottom: 5px;">Belum Kawin</p>
        <p style="font-size: 1.2rem; color: #3b82f6;">620</p>
      </div>
      
      <div style="text-align: center;">
        <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
          <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Kawin" style="width: 40px; height: 40px;">
        </div>
        <p style="font-weight: 500; margin-bottom: 5px;">Kawin</p>
        <p style="font-size: 1.2rem; color: #3b82f6;">454</p>
      </div>
      
      <div style="text-align: center;">
        <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
          <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" alt="Cerai Mati" style="width: 40px; height: 40px;">
        </div>
        <p style="font-weight: 500; margin-bottom: 5px;">Cerai Mati</p>
        <p style="font-size: 1.2rem; color: #3b82f6;">69</p>
      </div>
      
      <div style="text-align: center;">
        <div style="background: #eff6ff; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 10px;">
          <img src="https://cdn-icons-png.flaticon.com/512/1828/1828543.png" alt="Cerai Hidup" style="width: 40px; height: 40px;">
        </div>
        <p style="font-weight: 500; margin-bottom: 5px;">Cerai Hidup</p>
        <p style="font-size: 1.2rem; color: #3b82f6;">3</p>
      </div>
    </div>
  </section>
</div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
</body>
</html>