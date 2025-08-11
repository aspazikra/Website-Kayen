<?php
include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $file_lama = $_POST['file_lama'];
    $file_path = $file_lama;
    
    // Jika ada file baru diupload
    if (!empty($_FILES['file_dokumen']['name'])) {
        $target_dir = "../dokumen/";
        $file_name = basename($_FILES["file_dokumen"]["name"]);
        $target_file = $target_dir . $file_name;
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Validasi ekstensi file
        $allowed_types = ['pdf', 'doc', 'docx', 'xls', 'xlsx'];
        if (!in_array($file_type, $allowed_types)) {
            die("Maaf, hanya file PDF, DOC, DOCX, XLS, dan XLSX yang diperbolehkan.");
        }
        
        // Upload file baru
        if (move_uploaded_file($_FILES["file_dokumen"]["tmp_name"], $target_file)) {
            // Hapus file lama jika ada
            if (file_exists($target_dir . $file_lama)) {
                unlink($target_dir . $file_lama);
            }
            $file_path = $file_name;
        } else {
            header("Location: edit_dokumen.php?id=$id&status=upload_gagal");
            exit();
        }
    }
    
    // Update data di database
    $stmt = $conn->prepare("UPDATE dokumen_desa SET judul = ?, deskripsi = ?, file_path = ? WHERE id = ?");
    $stmt->bind_param("sssi", $judul, $deskripsi, $file_path, $id);
    
    if ($stmt->execute()) {
        header("Location: admindokumen.php?status=edit_sukses");
    } else {
        header("Location: admindokumen.php?id=$id&status=edit_gagal");
    }
    
    $stmt->close();
    $conn->close();
}
?>