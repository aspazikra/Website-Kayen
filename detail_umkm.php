<?php
include 'database/koneksi.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p class='error-message'>Data tidak valid.</p>";
    exit;
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM umkm_desa WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<p class='error-message'>Data UMKM tidak ditemukan.</p>";
    exit;
}

$row = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['nama_umkm']); ?> - UMKM Desa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
            line-height: 1.6;
        }
        
        .umkm-container {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .umkm-header {
            position: relative;
            height: 300px;
            overflow: hidden;
        }
        
        .umkm-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .umkm-header:hover img {
            transform: scale(1.05);
        }
        
        .umkm-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            padding: 30px;
            color: white;
        }
        
        .umkm-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 0 2px 5px rgba(0,0,0,0.5);
        }
        
        .umkm-category {
            display: inline-block;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            margin-top: 10px;
        }
        
        .umkm-body {
            padding: 30px;
        }
        
        .umkm-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--light-text);
        }
        
        .meta-item i {
            color: var(--secondary-color);
            font-size: 1.2rem;
        }
        
        .umkm-description {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        
        .umkm-description p {
            margin-bottom: 20px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 25px;
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
        
        .social-share {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .social-share h5 {
            margin-bottom: 15px;
            color: var(--light-text);
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: transform 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .facebook { background-color: #3b5998; }
        .whatsapp { background-color: #25D366; }
        .instagram { background-color: #E1306C; }
        .twitter { background-color: #1DA1F2; }
        
        @media (max-width: 768px) {
            .umkm-container {
                margin: 20px 15px;
            }
            
            .umkm-header {
                height: 200px;
            }
            
            .umkm-title {
                font-size: 1.8rem;
            }
            
            .umkm-body {
                padding: 20px;
            }
        }
        
        .error-message {
            text-align: center;
            padding: 50px;
            font-size: 1.2rem;
            color: var(--accent-color);
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="umkm-container">
    <div class="umkm-header">
        <img src="image/umkm/<?php echo htmlspecialchars($row['gambar']); ?>" 
             alt="<?php echo htmlspecialchars($row['nama_umkm']); ?>">
        <div class="umkm-overlay">
            <h1 class="umkm-title"><?php echo htmlspecialchars($row['nama_umkm']); ?></h1>
            <span class="umkm-category"><?php echo htmlspecialchars($row['kategori']); ?></span>
        </div>
    </div>
    
    <div class="umkm-body">
        <div class="umkm-meta">
            <div class="meta-item">
                <i class="fas fa-user"></i>
                <span><?php echo htmlspecialchars($row['pemilik']); ?></span>
            </div>
            <div class="meta-item">
                <i class="fas fa-phone"></i>
                <a href="tel:<?php echo htmlspecialchars($row['kontak']); ?>" style="color: inherit; text-decoration: none;">
                    <?php echo htmlspecialchars($row['kontak']); ?>
                </a>
            </div>
            <div class="meta-item">
                <i class="fas fa-map-marker-alt"></i>
                <span><?php echo htmlspecialchars($row['alamat']); ?></span>
            </div>
            <div class="meta-item">
                <i class="far fa-calendar-alt"></i>
                <span>Bergabung <?php echo date('d M Y', strtotime($row['tanggal_input'])); ?></span>
            </div>
        </div>
        
        <div class="umkm-description">
            <h4>Tentang UMKM Kami</h4>
            <?php echo nl2br(htmlspecialchars($row['deskripsi'])); ?>
        </div>
        
        <a href="index.php" class="back-button">
            <i class="fas fa-arrow-left"></i>
            Kembali ke Beranda
        </a>
        
        <!-- <div class="social-share">
            <h5>Bagikan UMKM ini:</h5>
            <div class="social-icons">
                <a href="#" class="social-icon facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon whatsapp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" class="social-icon instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div> -->
    </div>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>