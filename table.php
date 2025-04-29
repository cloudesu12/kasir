<!DOCTYPE html>
<?php include 'koneksi.php'; ?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Stock Barang</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</head>
<body class="sb-nav-fixed">

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MENU KASIR</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Sidebar + Content -->
    <div id="layoutSidenav">
        <!-- Sidebar -->
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="table.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Stock Barang
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Maker by</div>
                    Siti Syifa Inaziah<br>212210013
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Stock Barang</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i> Data Stok Barang
                        </div><p>
                        <div class="card-body">
                            <a href="TambahBarangtabel.php" class="btn btn-primary mb-3">Tambah Barang</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Deskripsi</th>
                                            <th>Stock</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $result = mysqli_query($conn, "SELECT * FROM masukan_barang");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                                                    <td>$no</td>
                                                    <td>{$row['namabarang']}</td>
                                                    <td>{$row['deskripsi']}</td>
                                                    <td>{$row['stock']}</td>
                                                    <td>
                                                        <a href='edittabel.php?id={$row['idbarang']}'>Edit</a> | 
                                                        <a href='deletetabel.php?idbarang={$row['idbarang']}' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                                                    </td>
                                                </tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <div class="print-button">
                                    <button onclick="window.print()">Cetak / Print</button>
                                </div><p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">© 2025</div>
                        <div>
                            <a href="#">Privacy Policy</a> · <a href="#">Terms</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
