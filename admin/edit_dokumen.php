<?php
include '../database/koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM dokumen_desa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dokumen = $result->fetch_assoc();
$stmt->close();

if (!$dokumen) {
    die("Dokumen tidak ditemukan");
}
?>

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
      <?php include 'sidebar.php'; ?>
      <main class="col-md-9 ms-sm-auto col-lg-10 content">
        <div class="container mt-5">
          <h2>Edit Dokumen Desa</h2>
          
          <form action="proses_edit_dokumen.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $dokumen['id'] ?>">
            <input type="hidden" name="file_lama" value="<?= $dokumen['file_path'] ?>">
            
            <div class="row g-3 mb-4">
              <div class="col-md-12">
                <label class="form-label">Judul Dokumen*</label>
                <input type="text" class="form-control" name="judul" value="<?= htmlspecialchars($dokumen['judul']) ?>" required>
              </div>
              <div class="col-md-12">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="3"><?= htmlspecialchars($dokumen['deskripsi']) ?></textarea>
              </div>
              <div class="col-md-12">
                <label class="form-label">File Dokumen Saat Ini</label>
                <p><a href="../uploads/dokumen/<?= $dokumen['file_path'] ?>" target="_blank"><?= $dokumen['file_path'] ?></a></p>
              </div>
              <div class="col-md-12">
                <label class="form-label">Ganti File Dokumen (Biarkan kosong jika tidak ingin mengubah)</label>
                <input type="file" class="form-control" name="file_dokumen" accept=".pdf,.doc,.docx,.xls,.xlsx">
                <small class="text-muted">Format yang diterima: PDF, DOC, DOCX, XLS, XLSX</small>
              </div>
            </div>
            
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
              <a href="dokumen_desa.php" class="btn btn-secondary">Batal</a>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</body>
</html>