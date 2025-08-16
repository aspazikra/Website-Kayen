<?php
session_start();     // Mulai session
session_unset();     // Hapus semua variabel session
session_destroy();   // Hapus session dari server

// Redirect ke halaman login atau beranda
header("Location: ../index.php"); // ubah sesuai kebutuhan
exit();
?>
