<?php
include 'database/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css?php echo time(); ?>">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }
        .page-title {
            color: #2874A6;
            font-weight: 700;
        }
        .umkm-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .umkm-card:hover {
            transform: translateY(-4px);
        }
        .umkm-card img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
        .umkm-card h5 {
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
        }
        .umkm-card p {
            font-size: 14px;
            color: #666;
            min-height: 45px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title"><i class="fas fa-store"></i> Semua UMKM Desa</h2>
        <a href="index.php" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

    <div class="row g-4">
        <?php
        $sql = "SELECT * FROM umkm_desa ORDER BY tanggal_input DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-3 col-sm-6">
                <div class="umkm-card h-100 d-flex flex-column text-center">
                    <img src="image/umkm/<?php echo htmlspecialchars($row['gambar']); ?>" 
                         alt="<?php echo htmlspecialchars($row['nama_umkm']); ?>">
                    <div class="p-3 flex-grow-1 d-flex flex-column">
                        <h5><?php echo htmlspecialchars($row['nama_umkm']); ?></h5>
                        <span class="badge bg-info mb-2"><?php echo htmlspecialchars($row['kategori']); ?></span>
                        <p class="text-muted mb-1">Pemilik: <?php echo htmlspecialchars($row['pemilik']); ?></p>
                        <p class="small flex-grow-1">
                            <?php echo substr(htmlspecialchars($row['deskripsi']), 0, 80) . '...'; ?>
                        </p>
                        <a href="detail_umkm.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary mt-auto">
                            <i class="fas fa-eye"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        <?php
            }
        } else {
            echo "<p class='text-center text-muted'>Belum ada data UMKM.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
