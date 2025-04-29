<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h2>Tambah Barang tabel</h2>
    <form method="post">
        <input type="text" name="namabarang" placeholder="Nama Barang" required><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi" required><br>
        <input type="text" name="stock" placeholder="Stock" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    // Mendapatkan parameter from
    $from = isset($_GET['from']) ? $_GET['from'] : 'index'; 

    if (isset($_POST['simpan'])) {
        $namabarang = $_POST['namabarang'];
        $deskripsi = $_POST['deskripsi'];
        $stock = $_POST['stock'];

        // Query untuk memasukkan data tanpa idbarang
        $insert = mysqli_query($conn, "INSERT INTO masukan_barang (namabarang, deskripsi, stock) VALUES ('$namabarang', '$deskripsi', '$stock')");

        if ($insert) {
            // Redirect sesuai halaman asal
            if ($from == 'stock') {
                header("Location: table.php");  // Redirect ke halaman stock_barang.php
            } else {
                header("Location: table.php");  // Redirect ke halaman index.php
            }
        } else {
            // Menampilkan pesan error jika gagal
            echo "Gagal menyimpan data. Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
