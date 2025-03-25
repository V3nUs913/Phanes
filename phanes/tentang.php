<?php include 'header.php'; ?> <!-- Menyertakan Header -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Phanes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0ff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #0056b3;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .tentang-gambar {
            width: 60%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
            margin: 0 auto 20px auto; /* Gambar di atas deskripsi */
        }
        .back-home {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #ff6b6b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-home:hover {
            background: #ff4c4c;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Gambar Diletakkan di Atas Deskripsi -->
    <img src="""C:\XAMPP\htdocs\phanes\1 (2).png""" alt="Tentang Kami" class="tentang-gambar">

    <h1>Tentang Kami</h1>
    <p>
        Phanes adalah layanan 3D printing berbasis resin dengan teknologi terbaru untuk mencetak model dengan presisi tinggi. 
        Kami berfokus pada kepuasan pelanggan dengan menghadirkan hasil cetakan berkualitas tinggi.
    </p>

    <br>

</div>

<?php include 'footer.php'; ?> <!-- Menyertakan Footer -->

</body>
</html>
