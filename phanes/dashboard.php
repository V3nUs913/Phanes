<?php
session_start();
include 'config.php';

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil data user
$user_id = $_SESSION['user_id'];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
$user = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Dashboard - Phanes</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f0f4ff;
      color: #333;
    }

    .navbar {
      background-color: #93c5fd;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h2 {
      color: white;
      margin: 0;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      margin-left: 20px;
    }

    .container {
      padding: 60px 40px;
      text-align: center;
    }

    .welcome {
      font-size: 1.8em;
      color: #3b82f6;
    }

    .actions {
      margin-top: 40px;
    }

    .actions a {
      display: inline-block;
      margin: 10px;
      padding: 14px 28px;
      background-color: #3b82f6;
      color: white;
      border-radius: 12px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .actions a:hover {
      background-color: #2563eb;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h2>Phanes</h2>
    <div>
      <a href="index.php">Home</a>
      <a href="logout.php">Logout</a>
    </div>
  </div>

  <div class="container">
    <p class="welcome">Welcome, <?php echo htmlspecialchars($user['fullname']); ?>!</p>
    <p>What would you like to do today?</p>

    <div class="actions">
      <a href="order.php">Create a New Order</a>
      <a href="my_orders.php">View My Orders</a>
    </div>
  </div>

</body>
</html>
