<?php
include 'database/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen Desa</title>
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
        .document-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            height: 100%;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .document-card:hover {
            transform: translateY(-4px);
        }
        .document-card h5 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-top: 10px;
            min-height: 45px;
        }
        .document-card p {
            font-size: 14px;
            color: #666;
            min-height: 40px;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title"><i class="fas fa-file-alt"></i> Semua Dokumen Desa</h2>
        <a href="index.php" class="btn btn-outline-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

    <div class="row g-4">
        <?php
        $result = $conn->query("SELECT * FROM dokumen_desa ORDER BY tanggal_upload DESC");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col-md-4 col-sm-6">
                <div class="document-card text-center">
                    <i class="fas fa-file-alt fa-3x text-primary mb-2"></i>
                    <h5>
                        <a href="detail_dokumen.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <?php echo htmlspecialchars($row['judul']); ?>
                        </a>
                    </h5>
                    <p><?php echo htmlspecialchars(mb_strimwidth($row['deskripsi'], 0, 80, "...")); ?></p>
                    <a href="detail_dokumen.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                        <i class="fas fa-eye"></i> Lihat Dokumen
                    </a>
                </div>
            </div>
        <?php
            }
        } else {
            echo "<p class='text-center text-muted'>Belum ada dokumen yang tersedia.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
