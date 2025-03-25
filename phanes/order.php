<?php 
require 'header.php'; 
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];
    $detail_pesanan = $_POST['detail_pesanan'];

    $sql = "INSERT INTO orders (nama, email, nomor_hp, detail_pesanan) 
            VALUES ('$nama', '$email', '$nomor_hp', '$detail_pesanan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>✅ Pesanan berhasil dikirim!</p>";
    } else {
        echo "<p class='error-message'>❌ Terjadi kesalahan: " . $conn->error . "</p>";
    }
}

$conn->close();
?>

<style>
    .container {
    padding: 20px;
    text-align: center;
}

    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .order {
        max-width: 600px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .order h2 {
        text-align: center;
        color: #4A90E2;
        margin-bottom: 20px;
    }

    .order form {
        display: flex;
        flex-direction: column;
    }

    .order input, 
    .order textarea {
        margin-bottom: 15px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .order textarea {
        height: 100px;
        resize: none;
    }

    .order button {
        padding: 12px;
        background: #4A90E2;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: 0.3s;
    }

    .order button:hover {
        background: #357ABD;
    }

    .success-message, .error-message {
        text-align: center;
        font-size: 14px;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .success-message {
        color: #155724;
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
    }

    .error-message {
        color: #721c24;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
    }

    .back-home {
        display: block;
        text-align: center;
        margin-top: 20px;
        font-size: 16px;
        color: #4A90E2;
        text-decoration: none;
    }

    .back-home:hover {
        text-decoration: underline;
    }
</style>

<section class="order">
    <h2>Form Pemesanan</h2>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="nomor_hp" placeholder="Nomor HP" required>
        <textarea name="detail_pesanan" placeholder="Deskripsi Pesanan" required></textarea>
        <button type="submit">Kirim Pesanan</button>
    </form>
</section>

<a href="index.php" class="back-home">⬅ Kembali ke Home</a>

<?php require 'footer.php'; ?>
