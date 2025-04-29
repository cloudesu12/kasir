<?php
$host = "localhost";
$username = "root"; // Ganti kalau pakai username lain
$password = ""; // Ganti kalau pakai password
$dbname = "crud";

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Kalau koneksi berhasil, kamu bisa mulai pakai $conn
?>
