<?php include 'cek_login.php'; ?>

<?php
include '../database/koneksi.php';

if (!isset($_GET['id'])) {
    die("ID berita tidak ditemukan.");
}

$id = intval($_GET['id']);

// Ambil data untuk hapus gambar
$stmt = $conn->prepare("SELECT gambar FROM berita WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {
    $targetDir = "../image/berita/";
    if (!empty($data['gambar']) && file_exists($targetDir . $data['gambar'])) {
        unlink($targetDir . $data['gambar']);
    }

    // Hapus data
    $stmt = $conn->prepare("DELETE FROM berita WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: adminberita.php?deleted=1");
        exit;
    } else {
        echo "Gagal menghapus berita: " . $conn->error;
    }
} else {
    echo "Berita tidak ditemukan.";
}
