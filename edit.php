<?php
include 'koneksi.php';
$id = $_GET['id'];
$redirect = $_GET['redirect'] ?? 'index.php';
$data = mysqli_query($conn, "SELECT * FROM masukan_barang WHERE idbarang=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h2>Edit Barang</h2>
    <form method="post">
        <input type="text" name="idbarang" value="<?= $row['idbarang'] ?>" readonly><br>
        <input type="text" name="namabarang" value="<?= $row['namabarang'] ?>" required><br>
        <input type="text" name="deskripsi" value="<?= $row['deskripsi'] ?>" required><br>
        <input type="text" name="stock" value="<?= $row['stock'] ?>" required><br>
        <input type="hidden" name="redirect" value="<?= $redirect ?>">
        <button type="submit" name="update">Update</button>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $idbarang = $_POST['idbarang'];
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];
        $stock = $_POST['stock'];
        $redirect = $_POST['redirect'];

        $update = mysqli_query($conn, "UPDATE masukan_barang SET namabarang='$namabarang', deskripsi='$deskripsi', stock='$stock' WHERE idbarang=$idbarang");
        header("Location: $redirect");
    }
    ?>
</body>
</html>
