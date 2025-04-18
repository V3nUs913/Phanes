<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $figure_type = mysqli_real_escape_string($conn, $_POST['figure_type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    // Handle file upload
    $imageName = "";
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $imageName = time() . '_' . basename($_FILES['file']['name']);
        $uploadFile = $uploadDir . $imageName;
        move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
    }

    // Simpan ke database
    $query = "INSERT INTO orders (user_id, name, email, figure_type, description, image) 
              VALUES ('$user_id', '$name', '$email', '$figure_type', '$description', '$imageName')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Order berhasil dikirim!'); window.location='my_orders.php';</script>";
        exit();
    } else {
        echo "<script>alert('Gagal mengirim order!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Phanes - Order</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9fafe;
      color: #333;
    }

    .header {
      background-color: #3b82f6;
      color: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header a {
      color: white;
      text-decoration: none;
      margin-left: 30px;
      font-weight: bold;
    }

    .container {
      max-width: 700px;
      margin: 60px auto;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #3b82f6;
    }

    label {
      display: block;
      margin-top: 20px;
      font-weight: 600;
    }

    input, textarea, select {
      width: 100%;
      padding: 12px;
      margin-top: 8px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1em;
    }

    button {
      margin-top: 30px;
      width: 100%;
      padding: 14px;
      border: none;
      background-color: #3b82f6;
      color: white;
      font-size: 1.1em;
      border-radius: 12px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #2563eb;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Phanes</h1>
    <div>
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
    </div>
  </div>

  <div class="container">
    <h2>Order Custom 3D Figure</h2>
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>

      <label for="figure_type">Type of Figure</label>
      <select id="figure_type" name="figure_type" required>
        <option value="">-- Choose One --</option>
        <option value="anime">Anime Style</option>
        <option value="realistic">Realistic</option>
        <option value="chibi">Chibi</option>
        <option value="pet">Pet Figurine</option>
        <option value="other">Other</option>
      </select>

      <label for="description">Order Description</label>
      <textarea id="description" name="description" rows="6" placeholder="Describe your figure..." required></textarea>

      <label for="file">Upload Design/Image (optional)</label>
      <input type="file" id="file" name="file">

      <button type="submit">Submit Order</button>
    </form>
  </div>

</body>
</html>
