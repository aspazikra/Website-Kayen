<?php
include 'cek_login.php';
include '../database/koneksi.php';

// Hitung jumlah berita
$result_berita = $conn->query("SELECT COUNT(*) AS total FROM berita");
$total_berita = $result_berita->fetch_assoc()['total'];

// Hitung jumlah UMKM
$result_umkm = $conn->query("SELECT COUNT(*) AS total FROM umkm_desa");
$total_umkm = $result_umkm->fetch_assoc()['total'];

// Hitung jumlah dokumen
$result_dokumen = $conn->query("SELECT COUNT(*) AS total FROM dokumen_desa");
$total_dokumen = $result_dokumen->fetch_assoc()['total'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Desa Kayen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 content">
            <h2>Selamat Datang, <?php echo $_SESSION['admin_nama']; ?>!</h2>
            <p>Ini adalah halaman dashboard sistem informasi Desa Kayen.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Berita dan Pengumuman Terbit</h5>
                            <p class="card-text"><?php echo $total_berita; ?> Artikel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">UMKM Terdaftar</h5>
                            <p class="card-text"><?php echo $total_umkm; ?> UMKM</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Dokumen Desa</h5>
                            <p class="card-text"><?php echo $total_dokumen; ?> Dokumen</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
