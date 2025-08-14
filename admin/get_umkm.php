<?php include 'cek_login.php'; ?>

<?php
require_once 'umkm_crud.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $umkm = getUMKMById($id);
    header('Content-Type: application/json');
    echo json_encode($umkm);
}
