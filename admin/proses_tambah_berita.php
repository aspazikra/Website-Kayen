<?php include 'cek_login.php'; ?>

<?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal_publish = $_POST['tanggal_publish'];
    $kategori = $_POST['kategori'];
    $penulis = $_POST['penulis'];
    
    // Handle upload gambar
    $gambar = null;
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../image/berita/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
        $gambar = basename($_FILES["gambar"]["name"]);
    }
    
    // Insert ke database
    $stmt = $conn->prepare("INSERT INTO berita (judul, isi, gambar, tanggal_publish, kategori, penulis, status) 
                           VALUES (?, ?, ?, ?, ?, ?, 1)");
    $stmt->bind_param("ssssss", $judul, $isi, $gambar, $tanggal_publish, $kategori, $penulis);
    
    if ($stmt->execute()) {
        header("Location: adminberita.php?status=sukses");
    } else {
        header("Location: adminberita.php?status=gagal");
    }
    
    $stmt->close();
    $conn->close();
}
?>