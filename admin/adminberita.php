<?php include 'cek_login.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Berita Desa</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <div class = "container-fluid">
  <div class="row">
  <!-- sidebar -->
  <?php include 'sidebar.php'; ?>
  <!-- isi -->
  <main class="col-md-9 ms-sm-auto col-lg-10 content">
  <div class="container mt-5">
    <h2>Berita Desa</h2>
    <div class="d-flex justify-content-between mb-3">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBerita">Tambah Berita</button>
    </div>

<table class="table table-bordered table-hover">
  <thead class="table-info">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include '../database/koneksi.php';
    
    $sql = "SELECT * FROM berita ORDER BY tanggal_publish DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $no = 1;
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$no."</td>
                    <td>".htmlspecialchars($row['judul'])."</td>
                    <td>".$row['tanggal_publish']."</td>
                    <td>".htmlspecialchars($row['kategori'])."</td>
                    <td>
                      <a href='edit_berita.php?id=".$row['id']."' class='btn btn-sm btn-warning'>Edit</a>
                      <a href='hapus_berita.php?id=".$row['id']."' class='btn btn-sm btn-danger' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='5' class='text-center'>Tidak ada data berita</td></tr>";
    }
    
    $conn->close();
    ?>
  </tbody>
</table>

  </div>

  <!-- Modal Tambah Berita -->
  <div class="modal fade" id="modalBerita" tabindex="-1" aria-labelledby="modalBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="proses_tambah_berita.php" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="modalBeritaLabel">Tambah Berita Desa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Judul Berita</label>
              <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Isi Berita</label>
              <textarea class="form-control" name="isi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Gambar Utama</label>
              <input type="file" class="form-control" name="gambar">
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal Posting</label>
              <input type="date" class="form-control" name="tanggal_publish">
            </div>
            <div class="mb-3">
              <label class="form-label">Kategori</label>
              <select class="form-select" name="kategori" required>
                <option value="berita">Berita</option>
                <option value="pengumuman">Pengumuman</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Penulis</label>
              <input type="text" class="form-control" name="penulis" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Publikasikan</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  </main>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
