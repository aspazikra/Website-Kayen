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
    <title><?= htmlspecialchars($berita['judul']); ?> - Berita Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
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
        }
        
        .news-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .news-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .news-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
            color: var(--light-text);
            font-size: 0.95rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .news-image-container {
            position: relative;
            margin-bottom: 30px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .news-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .news-image:hover {
            transform: scale(1.02);
        }
        
        .news-content {
            margin-top: 30px;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .news-content p {
            margin-bottom: 20px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 40px;
            padding: 10px 20px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .back-button:hover {
            background-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            color: white;
        }
        
        .tag-container {
            display: flex;
            gap: 10px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .tag {
            padding: 5px 15px;
            background-color: #e0f2fe;
            color: var(--secondary-color);
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        @media (max-width: 768px) {
            .news-container {
                padding: 20px;
                margin: 20px 15px;
            }
            
            .news-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="news-container">
    <h1 class="news-title"><?= htmlspecialchars($berita['judul']); ?></h1>
    
    <div class="news-meta">
        <span class="meta-item">
            <i class="far fa-calendar-alt"></i>
            <?= date('d M Y', strtotime($berita['tanggal_publish'])); ?>
        </span>
        <span class="meta-item">
            <i class="far fa-user"></i>
            <?= htmlspecialchars($berita['penulis']); ?>
        </span>
        <span class="meta-item">
            <i class="far fa-folder"></i>
            <?= htmlspecialchars($berita['kategori']); ?>
        </span>
    </div>

<div class="news-image-container" style="width: 840px; height: 500px; overflow: hidden; display: flex; justify-content: center; align-items: center; background: #f5f5f5; border-radius: 8px;">
    <?php if (!empty($berita['gambar'])): ?>
        <img src="image/berita/<?= htmlspecialchars($berita['gambar']); ?>" 
             class="news-image" 
             alt="<?= htmlspecialchars($berita['judul']); ?>"
             style="object-fit: cover; width: 100%; height: 100%;">
    <?php else: ?>
        <img src="image/berita/default.jpg" 
             class="news-image" 
             alt="Gambar default"
             style="object-fit: cover; width: 100%; height: 100%;">
    <?php endif; ?>
</div>

    <div class="news-content">
        <?= nl2br(htmlspecialchars($berita['isi'])); ?>
    </div>
    
    <!-- <div class="tag-container">
        <span class="tag">#<?= htmlspecialchars($berita['kategori']); ?></span>
        <span class="tag">#BeritaDesa</span>
        <span class="tag">#Informasi</span>
    </div> -->

    <a href="index.php" class="back-button">
        <i class="fas fa-arrow-left"></i>
        Kembali ke Daftar Berita
    </a>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>