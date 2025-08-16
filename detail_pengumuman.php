<?php
include 'database/koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

// Ambil detail pengumuman
$sql = "SELECT * FROM berita 
        WHERE id = $id AND kategori = 'pengumuman' AND status = 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<div class='error-container'><p>Pengumuman tidak ditemukan atau telah dihapus</p><a href='index.php' class='btn btn-primary'>Kembali ke Beranda</a></div>";
    exit;
}

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= htmlspecialchars($row['judul']) ?> - Pengumuman Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #f39c12;
            --light-bg: #f8f9fa;
            --dark-text: #2c3e50;
            --light-text: #7f8c8d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.7;
            -webkit-text-size-adjust: 100%;
        }
        
        .pengumuman-container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .pengumuman-header {
            padding: 20px 15px 15px;
            border-bottom: 1px solid #eee;
        }
        
        .pengumuman-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 12px;
            word-wrap: break-word;
        }
        
        .pengumuman-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            color: var(--light-text);
            margin-bottom: 8px;
            font-size: 0.85rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .meta-item i {
            color: var(--accent-color);
            font-size: 0.9rem;
        }
        
        .pengumuman-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 3px 10px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .pengumuman-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            margin: 0 auto;
            display: block;
            border-radius: 0;
            box-shadow: none;
        }
        
        .pengumuman-content {
            padding: 20px 15px;
            font-size: 1rem;
            line-height: 1.7;
            overflow-wrap: break-word;
        }
        
        .pengumuman-content p {
            margin-bottom: 15px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 10px 20px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-top: 15px;
            font-size: 0.9rem;
        }
        
        .error-container {
            max-width: 100%;
            margin: 50px 15px;
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }
        
        .error-container p {
            font-size: 1rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }
        
        /* Tablet dan Desktop */
        @media (min-width: 768px) {
            .pengumuman-container {
                margin: 40px auto;
                border-radius: 12px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            }
            
            .pengumuman-header {
                padding: 30px 30px 20px;
            }
            
            .pengumuman-title {
                font-size: 2.2rem;
                margin-bottom: 15px;
            }
            
            .pengumuman-meta {
                gap: 20px;
                font-size: 1rem;
            }
            
            .meta-item i {
                font-size: 1rem;
            }
            
            .pengumuman-badge {
                padding: 5px 15px;
                font-size: 0.9rem;
            }
            
            .pengumuman-image {
                max-height: 500px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            
            .pengumuman-content {
                padding: 30px;
                font-size: 1.1rem;
            }
            
            .back-button {
                padding: 12px 25px;
                font-size: 1rem;
            }
            
            .error-container {
                max-width: 600px;
                margin: 100px auto;
                padding: 40px;
                border-radius: 12px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            
            .error-container p {
                font-size: 1.2rem;
            }
        }
        
        /* Animasi untuk menghindari render blocking */
        @media (prefers-reduced-motion: no-preference) {
            .pengumuman-image {
                transition: transform 0.3s ease;
            }
            
            .pengumuman-image:hover {
                transform: scale(1.02);
            }
            
            .back-button:hover {
                background-color: var(--primary-color);
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="pengumuman-container">
    <div class="pengumuman-header">
        <h1 class="pengumuman-title"><?= htmlspecialchars($row['judul']) ?></h1>
        
        <div class="pengumuman-meta">
            <div class="meta-item">
                <i class="far fa-calendar-alt"></i>
                <span><?= date('d M Y', strtotime($row['tanggal_publish'])) ?></span>
            </div>
            <div class="meta-item">
                <i class="fas fa-user"></i>
                <span><?= htmlspecialchars($row['penulis'] ?? 'Admin Desa') ?></span>
            </div>
            <span class="pengumuman-badge">
                <i class="fas fa-bullhorn"></i> Pengumuman
            </span>
        </div>
    </div>
    
    <div class="pengumuman-content">
        <?php if (!empty($row['gambar'])): ?>
            <img src="image/berita/<?= htmlspecialchars($row['gambar']) ?>" 
                 class="pengumuman-image mb-4" 
                 alt="<?= htmlspecialchars($row['judul']) ?>"
                 loading="lazy">
        <?php endif; ?>
        
        <div class="pengumuman-text">
            <?= nl2br(htmlspecialchars($row['isi'])) ?>
        </div>
        
        <a href="index.php" class="back-button">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
</div>

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

<?php include 'footer.php'; ?>
<?php $conn->close(); ?>