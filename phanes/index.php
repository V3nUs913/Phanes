<?php include 'header.php'; ?> <!-- Menyertakan Header -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phanes - Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #e3edf7;
        }
        .header {
            background-color: #99bbff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #002855;
            padding-left: 15px;
        }
        .header .nav-right {
            display: flex;
            align-items: center;
        }
        .header a {
            text-decoration: none;
            color: #002855;
            margin: 0 10px;
            font-size: 16px;
        }
        .header .back-home {
            background-color: #ff7f7f;
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #cce0ff;
            padding: 15px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            text-decoration: none;
            color: #002855;
            background-color: white;
            border-radius: 5px;
            text-align: center;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
            text-align: center;
        }
        .footer {
            background-color: #99bbff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>


    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
     
            <a href="galeri.php">Galeri</a>
            <a href="order.php">Order</a>
        </div>

        <!-- Content -->
        <div class="content">
            <h2 style="color:#004aad;">Selamat Datang di Phanes</h2>
            <p>Jasa 3D Printing berbahan resin dengan teknologi terbaru dan presisi tinggi.</p>
 
        </div>
    </div>

    <div class="footer">
        &copy; 2025 Phanes. All rights reserved.
    </div>

</body>
</html>
