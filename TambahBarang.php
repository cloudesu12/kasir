<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Tambah Barang index</h2>
    <form method="post">
        <!-- Hapus input idbarang karena akan auto increment -->
        <input type="text" name="namabarang" placeholder="Nama Barang" required><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi" required><br>
        <input type="text" name="stock" placeholder="Stock" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];
        $stock = $_POST['stock'];

        // Query untuk memasukkan data tanpa idbarang
        $insert = mysqli_query($conn, "INSERT INTO masukan_barang (namabarang, deskripsi, stock) VALUES ('$namabarang', '$deskripsi', '$stock')");

        if ($insert) {
            // Redirect ke index setelah berhasil
            header("Location: index.php");
        } else {
            // Menampilkan pesan error jika gagal
            echo "Gagal menyimpan data. Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
