<?php
// admin.php
require_once 'umkm_crud.php';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_id'])) {
        // Handle delete
        $id = $_POST['delete_id'];
        if (deleteUMKM($id)) {
            $_SESSION['message'] = ['type' => 'success', 'text' => 'UMKM berhasil dihapus.'];
        } else {
            $_SESSION['message'] = ['type' => 'danger', 'text' => 'Gagal menghapus UMKM.'];
        }
    } else {
        // Handle create/update
        $data = [
            'nama_umkm' => $_POST['nama_umkm'],
            'pemilik' => $_POST['pemilik'],
            'kategori' => $_POST['kategori'],
            'deskripsi' => $_POST['deskripsi'],
            'alamat' => $_POST['alamat'],
            'kontak' => $_POST['kontak']
        ];
        
        $gambar = null;
        if (!empty($_FILES['gambar']['name'])) {
            $upload = uploadGambar($_FILES['gambar']);
            if ($upload['success']) {
                $gambar = $upload['filename'];
            } else {
                $_SESSION['message'] = ['type' => 'danger', 'text' => $upload['message']];
            }
        }
        
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            if (updateUMKM($_POST['id'], $data, $gambar)) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'UMKM berhasil diperbarui.'];
            } else {
                $_SESSION['message'] = ['type' => 'danger', 'text' => 'Gagal memperbarui UMKM.'];
            }
        } else {
            if (createUMKM($data, $gambar)) {
                $_SESSION['message'] = ['type' => 'success', 'text' => 'UMKM baru berhasil ditambahkan.'];
            } else {
                $_SESSION['message'] = ['type' => 'danger', 'text' => 'Gagal menambahkan UMKM baru.'];
            }
        }
    }

    header("Location: adminumkm.php");
    exit;
}


// Get all UMKM for the table
$umkmList = getAllUMKM();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - UMKM Desa</title>
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
      
      <!-- main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 content">
        <div class="container mt-5">
          <h2>UMKM Desa</h2>
          
          <?php if (isset($message)): ?>
            <div class="alert alert-<?= $message['type'] ?> alert-dismissible fade show" role="alert">
              <?= $message['text'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          
          <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUMKM" onclick="resetForm()">
              <i class="bi bi-plus-circle"></i> Tambah UMKM
            </button>
          </div>

          <table class="table table-bordered table-hover">
            <thead class="table-info">
              <tr>
                <th>No</th>
                <th>Nama UMKM</th>
                <th>Pemilik</th>
                <th>Kategori</th>
                <th>Kontak</th>
                <th>Tanggal Input</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if (empty($umkmList)): ?>
                <tr>
                  <td colspan="7" class="text-center">Tidak ada data UMKM</td>
                </tr>
              <?php else: ?>
                <?php foreach ($umkmList as $index => $umkm): ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($umkm['nama_umkm']) ?></td>
                    <td><?= htmlspecialchars($umkm['pemilik']) ?></td>
                    <td><?= htmlspecialchars($umkm['kategori']) ?></td>
                    <td><?= htmlspecialchars($umkm['kontak']) ?></td>
                    <td><?= date('Y-m-d H:i', strtotime($umkm['tanggal_input'])) ?></td>
                    <td>
                      <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalUMKM" 
                              onclick="editUMKM(<?= $umkm['id'] ?>)">
                        <i class="bi bi-pencil"></i> Edit
                      </button>
                      <form method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus UMKM ini?')">
                        <input type="hidden" name="delete_id" value="<?= $umkm['id'] ?>">
                        <button type="submit" class="btn btn-sm btn-danger">
                          <i class="bi bi-trash"></i> Hapus
                        </button>
                      </form>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- Modal Tambah/Edit UMKM -->
        <div class="modal fade" id="modalUMKM" tabindex="-1" aria-labelledby="modalUMLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="umkmId">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalUMLabel">Tambah UMKM Desa</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Nama UMKM*</label>
                      <input type="text" class="form-control" name="nama_umkm" id="nama_umkm" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Nama Pemilik*</label>
                      <input type="text" class="form-control" name="pemilik" id="pemilik" required>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Kategori</label>
                      <select class="form-select" name="kategori" id="kategori">
                        <option value="">Pilih Kategori</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Kerajinan">Kerajinan</option>
                        <option value="Pertanian">Pertanian</option>
                        <option value="Jasa">Jasa</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label">Kontak*</label>
                      <input type="text" class="form-control" name="kontak" id="kontak" required>
                    </div>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Deskripsi UMKM</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4"></textarea>
                  </div>
                  
                  <div class="mb-3">
                    <label class="form-label">Gambar UMKM</label>
                    <input type="file" class="form-control" name="gambar" accept="image/*">
                    <small class="text-muted">Ukuran maksimal 2MB. Format: JPG, PNG</small>
                    <div id="gambarPreview" class="mt-2"></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
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
    // Function to populate form for editing
    async function editUMKM(id) {
      try {
        const response = await fetch(`get_umkm.php?id=${id}`);
        const umkm = await response.json();
        
        if (umkm) {
          document.getElementById('modalUMLabel').textContent = 'Edit UMKM Desa';
          document.getElementById('umkmId').value = umkm.id;
          document.getElementById('nama_umkm').value = umkm.nama_umkm;
          document.getElementById('pemilik').value = umkm.pemilik;
          document.getElementById('kategori').value = umkm.kategori;
          document.getElementById('kontak').value = umkm.kontak;
          document.getElementById('alamat').value = umkm.alamat;
          document.getElementById('deskripsi').value = umkm.deskripsi;
          
          // Show current image if exists
          const gambarPreview = document.getElementById('gambarPreview');
          if (umkm.gambar) {
            gambarPreview.innerHTML = `
              <p>Gambar saat ini:</p>
              <img src="../image/umkm/${umkm.gambar}" style="max-width: 200px; max-height: 150px;" class="img-thumbnail">
              <input type="hidden" name="current_gambar" value="${umkm.gambar}">
            `;
          } else {
            gambarPreview.innerHTML = '<p>Tidak ada gambar</p>';
          }
        }
      } catch (error) {
        console.error('Error fetching UMKM data:', error);
      }
    }
    
    // Function to reset form for adding new UMKM
    function resetForm() {
      document.getElementById('modalUMLabel').textContent = 'Tambah UMKM Desa';
      document.getElementById('umkmId').value = '';
      document.querySelector('form').reset();
      document.getElementById('gambarPreview').innerHTML = '';
    }
    
    // Reset modal when closed
    document.getElementById('modalUMKM').addEventListener('hidden.bs.modal', resetForm);
  </script>
</body>
</html>