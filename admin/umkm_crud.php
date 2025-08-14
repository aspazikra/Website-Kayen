<?php include 'cek_login.php'; ?>

<?php
// umkm_crud.php

require_once '../database/koneksi.php'; // Pastikan koneksi database sudah dibuat

// ======== CREATE ========
function createUMKM($data, $gambar = null) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO umkm_desa (nama_umkm, pemilik, kategori, deskripsi, alamat, kontak, gambar, tanggal_input) 
                             VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param(
        "sssssss",
        $data['nama_umkm'],
        $data['pemilik'],
        $data['kategori'],
        $data['deskripsi'],
        $data['alamat'],
        $data['kontak'],
        $gambar
    );
    return $stmt->execute();
}

// ======== READ ========
function getAllUMKM() {
    global $conn;
    $result = $conn->query("SELECT * FROM umkm_desa ORDER BY tanggal_input DESC");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getUMKMById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM umkm_desa WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// ======== UPDATE ========
function updateUMKM($id, $data, $gambar = null) {
    global $conn;

    if ($gambar) {
        $stmt = $conn->prepare("UPDATE umkm_desa 
            SET nama_umkm=?, pemilik=?, kategori=?, deskripsi=?, alamat=?, kontak=?, gambar=? 
            WHERE id=?");
        $stmt->bind_param(
            "sssssssi",
            $data['nama_umkm'],
            $data['pemilik'],
            $data['kategori'],
            $data['deskripsi'],
            $data['alamat'],
            $data['kontak'],
            $gambar,
            $id
        );
    } else {
        $stmt = $conn->prepare("UPDATE umkm_desa 
            SET nama_umkm=?, pemilik=?, kategori=?, deskripsi=?, alamat=?, kontak=? 
            WHERE id=?");
        $stmt->bind_param(
            "ssssssi",
            $data['nama_umkm'],
            $data['pemilik'],
            $data['kategori'],
            $data['deskripsi'],
            $data['alamat'],
            $data['kontak'],
            $id
        );
    }
    return $stmt->execute();
}

// ======== DELETE ========
function deleteUMKM($id) {
    global $conn;

    // hapus gambar dari folder
    $umkm = getUMKMById($id);
    if ($umkm && !empty($umkm['gambar']) && file_exists("../image/umkm/" . $umkm['gambar'])) {
        unlink("../image/umkm/" . $umkm['gambar']);
    }

    $stmt = $conn->prepare("DELETE FROM umkm_desa WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// ======== UPLOAD GAMBAR ========
function uploadGambar($file) {
    $targetDir = "../image/umkm/";
    $allowedTypes = ['jpg', 'jpeg', 'png'];
    $maxSize = 2 * 1024 * 1024; // 2MB

    $filename = basename($file['name']);
    $fileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (!in_array($fileType, $allowedTypes)) {
        return ['success' => false, 'message' => 'Format file harus JPG atau PNG.'];
    }

    if ($file['size'] > $maxSize) {
        return ['success' => false, 'message' => 'Ukuran file maksimal 2MB.'];
    }

    $newFilename = uniqid("umkm_", true) . "." . $fileType;
    $targetFile = $targetDir . $newFilename;

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        return ['success' => true, 'filename' => $newFilename];
    } else {
        return ['success' => false, 'message' => 'Gagal mengunggah gambar.'];
    }
}