<?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    
    // Handle upload file
    $target_dir = "../dokumen/";
    $file_name = basename($_FILES["file_dokumen"]["name"]);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Validasi ekstensi file
    $allowed_types = ['pdf', 'doc', 'docx', 'xls', 'xlsx'];
    if (!in_array($file_type, $allowed_types)) {
        die("Maaf, hanya file PDF, DOC, DOCX, XLS, dan XLSX yang diperbolehkan.");
    }
    
    // Upload file
    if (move_uploaded_file($_FILES["file_dokumen"]["tmp_name"], $target_file)) {
        // Insert ke database
        $stmt = $conn->prepare("INSERT INTO dokumen_desa (judul, deskripsi, file_path) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $judul, $deskripsi, $file_name);
        
        if ($stmt->execute()) {
            header("Location: admindokumen.php?status=sukses");
        } else {
            header("Location: admindokumen.php?status=gagal");
        }
        
        $stmt->close();
    } else {
        header("Location: dokumen_desa.php?status=upload_gagal");
    }
    
    $conn->close();
}
?>