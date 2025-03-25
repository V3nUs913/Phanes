<?php
$host = "localhost";  // Ubah jika hosting berbeda
$user = "root";       // Default XAMPP
$pass = "";           // Kosongkan jika pakai XAMPP
$dbname = "phanes_db";

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
