<?php
session_start();
include '../database/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Cek user di database
$sql = "SELECT * FROM admin_desa WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    // Set session admin
    $_SESSION['admin_id'] = $row['id'];
    $_SESSION['admin_nama'] = $row['nama'];
    $_SESSION['admin_username'] = $row['username'];

    header("Location: adminindex.php");
    exit();
} else {
    echo "<script>alert('Username atau password salah!'); window.location.href='adminlogin.php';</script>";
}

$stmt->close();
$conn->close();
?>
