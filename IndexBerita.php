<?php
include 'database/koneksi.php';

// Ambil berita (kategori berita)
$sqlBerita = "SELECT * FROM berita WHERE kategori = 'berita' AND status = 1 ORDER BY tanggal_publish DESC";
$resultBerita = $conn->query($sqlBerita);

// Ambil pengumuman (kategori pengumuman)
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
    <link rel="stylesheet" href="css/berita.css">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time(); ?>">

</head>
<body>

<?php include 'header.php'; ?>

<div class="container news-section">
    <!-- Bagian Berita Desa -->
    <div class="section-title">
        <span><i class="fas fa-newspaper"></i> Daftar Berita Desa</span>
    </div>
    <div class="newspaper-x-layout-b-row">
        <div class="row justify-content-start">
        <?php if ($resultBerita->num_rows > 0): ?>
            <?php while ($row = $resultBerita->fetch_assoc()): ?>
                <div class="col-md-3">
                    <div class="newspaper-x-blog-post-layout-b">
                        <div class="newspaper-x-image">
                            <?php if (!empty($row['gambar'])): ?>
                                <img src="image/berita/<?= htmlspecialchars($row['gambar']); ?>" alt="<?= htmlspecialchars($row['judul']); ?>">
                            <?php else: ?>
                                <img src="image/berita/default.jpg" alt="Gambar default">
                            <?php endif; ?>
                        </div>
                        <div class="newspaper-x-title">
                            <h4>
                                <a href="detail_berita.php?id=<?= $row['id']; ?>">
                                    <?= htmlspecialchars($row['judul']); ?>
                                </a>
                            </h4>
                        </div>
                        <div class="newspaper-x-date">
                            <i class="far fa-calendar-alt"></i> <?= date('d M Y', strtotime($row['tanggal_publish'])); ?>
                        </div>
                        <div class="newspaper-x-content">
                            <?= substr(strip_tags($row['isi']), 0, 100); ?>...
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Belum ada berita.</p>
        <?php endif; ?>
    </div>
    </div>
</div>

<div class="container news-section">
    <!-- Bagian Pengumuman Desa -->
    <div class="section-title">
        <span><i class="fas fa-bullhorn"></i> Pengumuman Desa</span>
    </div>
    <div class="newspaper-x-layout-b-row">
            <div class="row justify-content-start">
        <?php if ($resultPengumuman->num_rows > 0): ?>
            <?php while ($row = $resultPengumuman->fetch_assoc()): ?>
                <div class="col-md-3">
                    <div class="newspaper-x-blog-post-layout-b">
                        <div class="newspaper-x-image">
                            <?php if (!empty($row['gambar'])): ?>
                                <img src="image/berita/<?= htmlspecialchars($row['gambar']); ?>" alt="<?= htmlspecialchars($row['judul']); ?>">
                            <?php else: ?>
                                <img src="image/berita/default.jpg" alt="Gambar default">
                            <?php endif; ?>
                        </div>
                        <div class="newspaper-x-title">
                            <h4>
                                <a href="detail_berita.php?id=<?= $row['id']; ?>">
                                    <?= htmlspecialchars($row['judul']); ?>
                                </a>
                            </h4>
                        </div>
                        <div class="newspaper-x-date">
                            <i class="far fa-calendar-alt"></i> <?= date('d M Y', strtotime($row['tanggal_publish'])); ?>
                        </div>
                        <div class="newspaper-x-content">
                            <?= substr(strip_tags($row['isi']), 0, 100); ?>...
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Belum ada pengumuman.</p>
        <?php endif; ?>
    </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php $conn->close(); ?>
