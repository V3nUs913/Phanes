<?php include 'sidebar.php'; ?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar - Phanes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #a0c4ff;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidebar a {
            display: block;
            padding: 15px;
            color: #333;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #74b3ff;
            color: white;
        }
        .toggle-btn {
            position: absolute;
            top: 20px;
            right: -50px;
            background-color: #ff9b9b;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-align: center;
        }
        .toggle-btn:hover {
            background-color: #ff6b6b;
        }
    </style>
</head>
<body>

<aside class="sidebar">
    <ul>
        <li><a href="tentang.php">Tentang</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="order.php">Order</a></li>
    </ul>
</aside>


</body>
</html>
