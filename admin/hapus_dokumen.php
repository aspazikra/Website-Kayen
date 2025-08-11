<?php
include '../database/koneksi.php';

$id = $_GET['id'];

// Ambil data file sebelum dihapus
$sql = "SELECT file_path FROM dokumen_desa WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$dokumen = $result->fetch_assoc();
$stmt->close();

// Hapus dari database
$stmt = $conn->prepare("DELETE FROM dokumen_desa WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();

// Hapus file fisik
if ($dokumen && file_exists("../uploads/dokumen/" . $dokumen['file_path'])) {
    unlink("../uploads/dokumen/" . $dokumen['file_path']);
}

$conn->close();
header("Location: admindokumen.php?status=hapus_sukses");
?>