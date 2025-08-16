<?php
include 'database/koneksi.php';

// Pastikan parameter id ada dan valid
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p>Dokumen tidak ditemukan.</p>";
    exit;
}

$id = intval($_GET['id']);

// Ambil data dokumen dari database
$sql = "SELECT * FROM dokumen_desa WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $dokumen = $result->fetch_assoc();
} else {
    echo "<p>Dokumen tidak ditemukan.</p>";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($dokumen['judul']); ?> - Dokumen Desa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --text-color: #495057;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7ff;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .document-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 20px rgba(67, 97, 238, 0.15);
        }
        
        .document-container {
            max-width: 900px;
            margin: 0 auto 3rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .document-body {
            padding: 2.5rem;
        }
        
        .document-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }
        
        .document-meta {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .document-meta i {
            margin-right: 0.5rem;
            color: var(--accent-color);
        }
        
        .document-content {
            font-size: 1.05rem;
            color: var(--text-color);
            margin-bottom: 2rem;
        }
        
        .document-content p {
            margin-bottom: 1.2rem;
        }
        
        .document-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .btn-download {
            background-color: var(--primary-color);
            border: none;
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-download:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        .btn-back {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            background-color: #f0f3ff;
            color: var(--secondary-color);
        }
        
        .file-info {
            background-color: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--accent-color);
        }
        
        .file-info i {
            color: var(--accent-color);
            margin-right: 0.5rem;
        }
        
        @media (max-width: 768px) {
            .document-body {
                padding: 1.5rem;
            }
            
            .document-title {
                font-size: 1.6rem;
            }
            
            .document-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="document-container">
        <div class="document-body">
            <h1 class="document-title"><?php echo htmlspecialchars($dokumen['judul']); ?></h1>
            
            <div class="document-meta">
                <span><i class="far fa-calendar-alt"></i> <?php echo date('d F Y', strtotime($dokumen['tanggal_upload'])); ?></span>
                <span><i class="far fa-file"></i> <?php echo strtoupper(pathinfo($dokumen['file_path'], PATHINFO_EXTENSION)); ?> File</span>
            </div>
            
            <div class="file-info">
                <i class="fas fa-info-circle"></i> Dokumen ini telah diunggah pada <?php echo date('l, d F Y H:i', strtotime($dokumen['tanggal_upload'])); ?>
            </div>
            
            <div class="document-content">
                <?php echo nl2br(htmlspecialchars($dokumen['deskripsi'])); ?>
            </div>
            
            <div class="document-actions">
                <a href="<?php echo 'dokumen/' . htmlspecialchars($dokumen['file_path']); ?>" target="_blank" class="btn btn-download btn-primary">
                    <i class="fas fa-download me-2"></i>Unduh Dokumen
                </a>
                <a href="index.php" class="btn btn-back">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                </a>
            </div>
        </div>
    </div>
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
</body>
</html>