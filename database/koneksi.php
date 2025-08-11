<?php
$host     = "localhost";       // atau 127.0.0.1
$user     = "root";            // default user XAMPP
$password = "";                // kosongkan jika pakai XAMPP
$database = "website_kayen";   // nama database kamu

// Buat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
?>
