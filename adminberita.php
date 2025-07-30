<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Berita Desa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Pembangunan Jalan Baru</td>
          <td>2025-07-28</td>
          <td>Aktif</td>
          <td>
            <button class="btn btn-sm btn-warning">Edit</button>
            <button class="btn btn-sm btn-danger">Hapus</button>
          </td>
        </tr>
        <!-- Tambahkan berita lainnya -->
      </tbody>
    </table>
  </div>

  <!-- Modal Tambah Berita -->
  <div class="modal fade" id="modalBerita" tabindex="-1" aria-labelledby="modalBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title" id="modalBeritaLabel">Tambah Berita Desa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Judul Berita</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Isi Berita</label>
              <textarea class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Gambar Utama</label>
              <input type="file" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Tanggal Posting</label>
              <input type="date" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Aktif</option>
                <option>Draft</option>
              </select>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
