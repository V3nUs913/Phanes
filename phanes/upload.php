<?php
include 'config.php'; // Menggunakan config.php sebagai koneksi database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_file = $_FILES['gambar']['name'];
    $tmp_name = $_FILES['gambar']['tmp_name'];
    $folder = "uploads/";

    // Pastikan folder uploads ada
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $path_file = $folder . basename($nama_file);

    if (move_uploaded_file($tmp_name, $path_file)) {
        $sql = "INSERT INTO galeri (gambar) VALUES ('$path_file')";
        if (mysqli_query($conn, $sql)) {
            echo "Gambar berhasil diunggah.";
        } else {
            echo "Gagal menyimpan ke database: " . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="gambar" required>
    <button type="submit">Upload</button>
</form>
