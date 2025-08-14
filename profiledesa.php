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
      "Desa [Nama Desa] sebagai Desa [Visi Utama] yang mampu mengelola potensi desa dan pembangunan berkelanjutan untuk mewujudkan masyarakat yang sejahtera dan mandiri"
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
        <li>Mewujudkan tata kelola pemerintahan yang baik dan transparan</li>
        <li>Mengembangkan kegiatan keagamaan dan sosial budaya</li>
        <li>Meningkatkan kualitas pendidikan dan SDM</li>
        <li>Mengembangkan teknologi informasi</li>
        <li>Pembangunan infrastruktur yang merata dan berkelanjutan</li>
        <li>Mengoptimalkan seluruh potensi desa</li>
      </ol>
    </div>
  </div>

  <!-- Bagan Desa -->
  <div class="card-custom">
    <div class="card-header-custom">
      <span>Bagan Desa</span>
      <span class="arrow">▼</span>
    </div>
    <div class="card-content">
      <h5 class="text-center text-primary mb-3">Struktur Organisasi Pemerintahan Desa</h5>
      <img src="https://cdn.digitaldesa.com/uploads/profil/64.02.17.2005/common/f6f6d96a1cd6ee00b0df15c9ff8a2ae1.png" class="img-fluid rounded mb-4" alt="">
      <h5 class="text-center text-primary mb-3">Struktur Organisasi BPD</h5>
      <img src="https://cdn.digitaldesa.com/uploads/profil/64.02.17.2005/common/f3070a5e9163d61f162d16e39d50f4e4.jpg" class="img-fluid rounded" alt="">
    </div>
  </div>

  <!-- Sejarah Desa -->
  <div class="card-custom">
    <div class="card-header-custom">
      <span>Sejarah Desa</span>
      <span class="arrow">▼</span>
    </div>
    <div class="card-content text-center text-muted">
      Belum ada sejarah desa yang tersedia.
    </div>
  </div>

  <!-- Informasi Desa -->
  <div class="card-custom p-3">
    <h5 class="text-primary border-bottom pb-2 mb-3">Informasi Desa</h5>
    <div class="info-grid">
      <div class="info-item">
        <p class="info-label">Luas Wilayah</p>
        <p class="info-value">[XX] Km²</p>
      </div>
      <div class="info-item">
        <p class="info-label">Jumlah Penduduk</p>
        <p class="info-value">[XXXX] Jiwa</p>
      </div>
      <div class="info-item">
        <p class="info-label">Kode Pos</p>
        <p class="info-value">[XXXXX]</p>
      </div>
      <div class="info-item">
        <p class="info-label">Kecamatan</p>
        <p class="info-value">[Nama Kecamatan]</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
