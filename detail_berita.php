<?php
// Koneksi ke database
include 'database/koneksi.php';

// Ambil ID berita dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query berita berdasarkan ID
$sql = "SELECT * FROM berita WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<h2>Berita tidak ditemukan</h2>";
    exit;
}

$berita = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($berita['judul']); ?> - Berita Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #7f8c8d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
            padding-bottom: 60px;
        }
        
        .news-container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px 15px;
            background: white;
        }
        
        .news-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .news-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px 15px;
            margin-bottom: 20px;
            color: var(--light-text);
            font-size: 0.9rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .news-image-container {
            width: 100%;
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            background: #f5f5f5;
            aspect-ratio: 16/9;
        }
        
        .news-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .news-content {
            margin-top: 25px;
            font-size: 1rem;
            line-height: 1.8;
        }
        
        .news-content p {
            margin-bottom: 1.5rem;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: 0.95rem;
        }
        
        .back-button:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        /* Desktop styles */
        @media (min-width: 768px) {
            .news-container {
                padding: 30px;
                margin: 40px auto;
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            .news-title {
                font-size: 2.2rem;
            }
            
            .news-meta {
                font-size: 0.95rem;
            }
            
            .news-content {
                font-size: 1.1rem;
            }
        }
        
        /* Very small devices */
        @media (max-width: 400px) {
            .news-title {
                font-size: 1.5rem;
            }
            
            .news-meta {
                font-size: 0.8rem;
                gap: 8px 12px;
            }
            
            .back-button {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container">
    <div class="news-container">
        <h1 class="news-title"><?= htmlspecialchars($berita['judul']); ?></h1>
        
        <div class="news-meta">
            <span class="meta-item">
                <i class="far fa-calendar-alt"></i>
                <?= date('d M Y', strtotime($berita['tanggal_publish'])); ?>
            </span>
            <?php if (!empty($berita['penulis'])): ?>
            <span class="meta-item">
                <i class="far fa-user"></i>
                <?= htmlspecialchars($berita['penulis']); ?>
            </span>
            <?php endif; ?>
            <span class="meta-item">
                <i class="far fa-folder"></i>
                <?= htmlspecialchars($berita['kategori']); ?>
            </span>
        </div>

        <div class="news-image-container">
            <?php if (!empty($berita['gambar'])): ?>
                <img src="image/berita/<?= htmlspecialchars($berita['gambar']); ?>" 
                     class="news-image" 
                     alt="<?= htmlspecialchars($berita['judul']); ?>">
            <?php else: ?>
                <img src="image/berita/default.jpg" 
                     class="news-image" 
                     alt="Gambar default">
            <?php endif; ?>
        </div>

        <div class="news-content">
            <?= nl2br(htmlspecialchars($berita['isi'])); ?>
        </div>
        
        <a href="javascript:history.back()" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
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