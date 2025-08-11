<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Data Dokumen Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- sidebar -->
      <?php include 'sidebar.php'; ?>
      <!-- isi -->
      <main class="col-md-9 ms-sm-auto col-lg-10 content">
        <div class="container mt-5">
          <h2>Data Dokumen Desa</h2>
          <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Dokumen</button>
            <input type="text" class="form-control w-25" id="searchInput" placeholder="Cari Judul Dokumen">
          </div>

          <table class="table table-bordered table-striped">
            <thead class="table-primary">
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>File</th>
                <th>Tanggal Upload</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Koneksi ke database
              include '../database/koneksi.php';
              
              // Query untuk mengambil data dokumen
              $sql = "SELECT * FROM dokumen_desa ORDER BY tanggal_upload DESC";
              $result = $conn->query($sql);
              
              if ($result->num_rows > 0) {
                  $no = 1;
                  while($row = $result->fetch_assoc()) {
                      echo "<tr>
                              <td>".$no."</td>
                              <td>".htmlspecialchars($row['judul'])."</td>
                              <td>".htmlspecialchars(substr($row['deskripsi'], 0, 50)).(strlen($row['deskripsi']) > 50 ? '...' : '')."</td>
                              <td><a href='../dokumen/".$row['file_path']."' target='_blank'>Lihat Dokumen</a></td>
                              <td>".date('d-m-Y H:i', strtotime($row['tanggal_upload']))."</td>
                              <td>
                                <button class='btn btn-sm btn-warning' onclick='editDokumen(".$row['id'].")'>Edit</button>
                                <button class='btn btn-sm btn-danger' onclick='hapusDokumen(".$row['id'].")'>Hapus</button>
                              </td>
                            </tr>";
                      $no++;
                  }
              } else {
                  echo "<tr><td colspan='6' class='text-center'>Tidak ada data dokumen</td></tr>";
              }
              $conn->close();
              ?>
            </tbody>
          </table>
        </div>

        <!-- Modal Tambah Dokumen -->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form action="proses_tambah_dokumen.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTambahLabel">Tambah Dokumen Desa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label class="form-label">Judul Dokumen*</label>
                      <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label">File Dokumen*</label>
                      <input type="file" class="form-control" name="file_dokumen" accept=".pdf,.doc,.docx,.xls,.xlsx" required>
                      <small class="text-muted">Format yang diterima: PDF, DOC, DOCX, XLS, XLSX</small>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
  <script>
    // Fungsi pencarian
    document.getElementById('searchInput').addEventListener('keyup', function() {
      const searchValue = this.value.toLowerCase();
      const rows = document.querySelectorAll('tbody tr');
      
      rows.forEach(row => {
        const judul = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        if (judul.includes(searchValue)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
    
    // Fungsi edit dokumen
    function editDokumen(id) {
      window.location.href = 'edit_dokumen.php?id=' + id;
    }
    
    // Fungsi hapus dokumen
    function hapusDokumen(id) {
      if (confirm('Apakah Anda yakin ingin menghapus dokumen ini?')) {
        window.location.href = 'hapus_dokumen.php?id=' + id;
      }
    }
  </script>
</body>
</html>