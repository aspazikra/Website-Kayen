<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Data Penduduk</title>
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
    <h2>Data Dokumen Desa</h2>
    <div class="d-flex justify-content-between mb-3">
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Penduduk</button>
      <input type="text" class="form-control w-25" placeholder="Cari Nama / NIK">
    </div>

    <table class="table table-bordered table-striped">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Dusun</th>
          <th>Jenis Kelamin</th>
          <th>Umur</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>1234567890</td>
          <td>Andi Saputra</td>
          <td>Dusun I</td>
          <td>Laki-laki</td>
          <td>34</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Hapus</button>
          </td>
        </tr>
        <!-- Data lain -->
      </tbody>
    </table>
  </div>

  <!-- Modal Tambah Penduduk -->
  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" id="modalTambahLabel">Tambah Data Penduduk</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Jenis Kelamin</label>
                <select class="form-select">
                  <option value="">Pilih</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label">Dusun</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Status Perkawinan</label>
                <select class="form-select">
                  <option>Belum Menikah</option>
                  <option>Menikah</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Pekerjaan</label>
                <input type="text" class="form-control">
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
</body>
</html>
