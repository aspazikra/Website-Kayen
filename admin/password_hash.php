<?php
include '../database/koneksi.php';

$nama = "Admin Kayen";
$username = "admin";
$password = password_hash("123456", PASSWORD_DEFAULT); // ubah 123456 ke password asli

$sql = "INSERT INTO admin_desa (nama, username, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nama, $username, $password);

if ($stmt->execute()) {
    echo "Admin berhasil ditambahkan";
} else {
    echo "Gagal: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
