<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Desa Borobudur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ffffff;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="position-sticky">
                <h5 class="text-white text-center mb-4">Admin Desa</h5>
                <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
                <a href="admindatapenduduk.php"><i class="bi bi-people"></i> Data Penduduk</a>
                <a href="adminberita.php"><i class="bi bi-newspaper"></i> Berita Desa</a>
                <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Keluar</a>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 content">
            <h2>Selamat Datang, Admin!</h2>
            <p>Ini adalah halaman dashboard sistem informasi Desa Borobudur.</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Penduduk</h5>
                            <p class="card-text">1.234 Jiwa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Berita Terbit</h5>
                            <p class="card-text">12 Artikel</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Permintaan Surat</h5>
                            <p class="card-text">5 Permintaan</p>
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
