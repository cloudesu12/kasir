<?php
include 'koneksi.php';
$idbarang = $_GET['idbarang'];
$redirect = $_GET['redirect'] ?? 'table.php';

$delete = mysqli_query($conn, "DELETE FROM masukan_barang WHERE idbarang=$idbarang");
header("Location: $redirect");
?>
