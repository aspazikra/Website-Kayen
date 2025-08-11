<?php
include '../database/koneksi.php';

if (!isset($_GET['id'])) {
    die("ID berita tidak ditemukan.");
}

$id = intval($_GET['id']);

// Ambil data berita
$stmt = $conn->prepare("SELECT * FROM berita WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$berita = $result->fetch_assoc();

if (!$berita) {
    die("Berita tidak ditemukan.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal_publish = $_POST['tanggal_publish'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    $status = isset($_POST['status']) ? 1 : 0;

    $gambarBaru = $berita['gambar']; // default gambar lama

    // Jika upload gambar baru
    if (!empty($_FILES['gambar']['name'])) {
        $targetDir = "../image/berita/";
        $ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid("berita_", true) . "." . $ext;
        $targetFile = $targetDir . $fileName;

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
            // Hapus gambar lama
            if (!empty($berita['gambar']) && file_exists($targetDir . $berita['gambar'])) {
                unlink($targetDir . $berita['gambar']);
            }
            $gambarBaru = $fileName;
        }
    }

    // Update berita
    $stmt = $conn->prepare("UPDATE berita SET judul=?, isi=?, gambar=?, tanggal_publish=?, kategori=?, penulis=?, status=? WHERE id=?");
    $stmt->bind_param("ssssssii", $judul, $isi, $gambarBaru, $tanggal_publish, $kategori, $penulis, $status, $id);
    if ($stmt->execute()) {
        header("Location: adminberita.php?success=1");
        exit;
    } else {
        echo "Gagal mengupdate berita: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Berita</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="<?= htmlspecialchars($berita['judul']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Isi Berita</label>
            <textarea class="form-control" name="isi" rows="5" required><?= htmlspecialchars($berita['isi']) ?></textarea>
        </div>
        <div class="mb-3">
            <label>Gambar</label><br>
            <?php if (!empty($berita['gambar'])): ?>
                <img src="../image/berita/<?= $berita['gambar'] ?>" width="150" class="mb-2"><br>
            <?php endif; ?>
            <input type="file" class="form-control" name="gambar">
        </div>
        <div class="mb-3">
            <label>Tanggal Publish</label>
            <input type="date" class="form-control" name="tanggal_publish" value="<?= $berita['tanggal_publish'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select class="form-select" name="kategori" required>
                <option value="berita" <?= $berita['kategori'] == 'berita' ? 'selected' : '' ?>>Berita</option>
                <option value="pengumuman" <?= $berita['kategori'] == 'pengumuman' ? 'selected' : '' ?>>Pengumuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Penulis</label>
            <input type="text" class="form-control" name="penulis" value="<?= htmlspecialchars($berita['penulis']) ?>" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="status" <?= $berita['status'] == 1 ? 'checked' : '' ?>>
            <label class="form-check-label">Aktif</label>
        </div>
        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="adminberita.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
