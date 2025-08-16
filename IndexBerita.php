<?php
include 'database/koneksi.php';

// Ambil semua berita (kategori berita)
$sqlBerita = "SELECT * FROM berita WHERE kategori = 'berita' AND status = 1 ORDER BY tanggal_publish DESC";
$resultBerita = $conn->query($sqlBerita);

// Ambil semua pengumuman (kategori pengumuman)
$sqlPengumuman = "SELECT * FROM berita WHERE kategori = 'pengumuman' AND status = 1 ORDER BY tanggal_publish DESC";
$resultPengumuman = $conn->query($sqlPengumuman);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Pengumuman Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">   
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .news-section {
            margin: 2rem auto;
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--secondary-color);
        }
        
        .section-title i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .news-card {
            margin-bottom: 2rem;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-img-top {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .card-body {
            padding: 1.25rem;
        }
        
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark-color);
        }
        
        .card-text {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }
        
        .news-date {
            font-size: 0.85rem;
            color: #7f8c8d;
            margin-bottom: 0.5rem;
        }
        
        .news-date i {
            margin-right: 5px;
        }
        
        .btn-detail {
            background-color: var(--secondary-color);
            border: none;
            padding: 0.375rem 0.75rem;
            font-size: 0.85rem;
            margin-top: 1rem;
        }
        
        .btn-detail:hover {
            background-color: #2980b9;
        }
        
        .no-content {
            text-align: center;
            padding: 2rem;
            color: #7f8c8d;
            font-style: italic;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.3rem;
            }
            
            .card-img-top {
                height: 180px;
            }
            
            .card-title {
                font-size: 1.1rem;
            }
            
            .card-text {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .news-section {
                padding: 1rem;
                margin: 1rem auto;
            }
            
            .section-title {
                font-size: 1.2rem;
                margin-bottom: 1.5rem;
            }
            
            .news-card {
                flex-direction: column !important;
            }
            
            .card-img-top {
                height: 150px;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container py-4">
    <!-- Bagian Berita Desa -->
    <section class="news-section">
        <h2 class="section-title">
            <i class="fas fa-newspaper"></i> Berita Desa
        </h2>
        
        <div class="row">
            <?php if ($resultBerita->num_rows > 0): ?>
                <?php while ($row = $resultBerita->fetch_assoc()): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card news-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <?php if (!empty($row['gambar'])): ?>
                                        <img src="image/berita/<?= htmlspecialchars($row['gambar']); ?>" class="card-img-top h-100" alt="<?= htmlspecialchars($row['judul']); ?>">
                                    <?php else: ?>
                                        <img src="image/berita/default.jpg" class="card-img-top h-100" alt="Gambar default">
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="news-date">
                                            <i class="far fa-calendar-alt"></i> <?= date('d M Y', strtotime($row['tanggal_publish'])); ?>
                                        </div>
                                        
                                        <h5 class="card-title"><?= htmlspecialchars($row['judul']); ?></h5>
                                        
                                        <div class="card-text">
                                            <?= strip_tags($row['isi']); ?>
                                        </div>
                                        
                                        <a href="detail_berita.php?id=<?= $row['id']; ?>" class="btn btn-detail btn-sm">
                                            Halaman Detail <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="no-content">
                        <i class="fas fa-newspaper fa-3x mb-3" style="color: #bdc3c7;"></i>
                        <p>Belum ada berita yang tersedia</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Bagian Pengumuman Desa -->
    <section class="news-section mt-4">
        <h2 class="section-title">
            <i class="fas fa-bullhorn"></i> Pengumuman Desa
        </h2>
        
        <div class="row">
            <?php if ($resultPengumuman->num_rows > 0): ?>
                <?php while ($row = $resultPengumuman->fetch_assoc()): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card news-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <?php if (!empty($row['gambar'])): ?>
                                        <img src="image/berita/<?= htmlspecialchars($row['gambar']); ?>" class="card-img-top h-100" alt="<?= htmlspecialchars($row['judul']); ?>">
                                    <?php else: ?>
                                        <img src="image/berita/default.jpg" class="card-img-top h-100" alt="Gambar default">
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="news-date">
                                            <i class="far fa-calendar-alt"></i> <?= date('d M Y', strtotime($row['tanggal_publish'])); ?>
                                        </div>
                                        
                                        <h5 class="card-title"><?= htmlspecialchars($row['judul']); ?></h5>
                                        
                                        <div class="card-text">
                                            <?= strip_tags($row['isi']); ?>
                                        </div>
                                        
                                        <a href="detail_pengumuman.php?id=<?= $row['id']; ?>" class="btn btn-detail btn-sm">
                                            Halaman Detail <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="no-content">
                        <i class="fas fa-bullhorn fa-3x mb-3" style="color: #bdc3c7;"></i>
                        <p>Belum ada pengumuman yang tersedia</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Navbar toggle functionality
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');
        const navLinks = document.querySelectorAll('.nav-link');
        
        if (navbarToggler && navbarCollapse) {
            navbarToggler.addEventListener('click', function() {
                console.log('Navbar toggled');
            });
            
            navLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
                    const isMobile = window.innerWidth < 992;
                    
                    if (isExpanded && isMobile) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        });
                        bsCollapse.hide();
                    }
                });
            });
        }
    });
    </script>
</body>
</html>

<?php $conn->close(); ?>