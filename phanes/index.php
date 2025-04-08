<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Phanes - Discover 3D Printing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    /* Sidebar kiri */
    .sidebar {
      width: 35%;
      background-color: #ffffff;
      padding: 40px 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
      font-size: 1.5em;
      color: #3b82f6;
    }

    .promo {
      margin-top: 60px;
    }

    .promo h1 {
      font-size: 2.5em;
      letter-spacing: 2px;
    }

    .promo h1 span {
      color: #3b82f6;
    }

    .promo p {
      margin: 20px 0;
      color: #555;
      line-height: 1.6em;
    }

    .promo button {
      padding: 10px 20px;
      background-color: #3b82f6;
      border: none;
      border-radius: 25px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .promo button:hover {
      background-color: #2563eb;
    }

    .social-icons {
      margin-top: 40px;
      display: flex;
      gap: 15px;
    }

    .social-icons i {
      font-size: 1.5em;
      color: #3b82f6;
      cursor: pointer;
    }

    /* Main Content */
    .main {
      width: 65%;
      background-image: url('https://cdn.pixabay.com/photo/2017/09/29/21/45/ulun-danu-2794774_960_720.jpg');
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .navbar {
      position: absolute;
      top: 30px;
      right: 40px;
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #ffd700;
    }

    .navbar button {
      padding: 8px 16px;
      background-color: white;
      color: #3b82f6;
      border: none;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .navbar button:hover {
      background-color: #e0e7ff;
    }

    /* Slider arrows */
    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 255, 255, 0.6);
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    .arrow.left {
      left: 20px;
    }

    .arrow.right {
      right: 20px;
    }

    .arrow:hover {
      background-color: white;
    }

    .arrow i {
      color: #3b82f6;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Sidebar Kiri -->
  <div class="sidebar">
    <div>
      <div class="logo-area">
        <i class="fas fa-cube"></i>
        Phanes
      </div>

      <div class="promo">
        <h1>Discover <span>Phanes</span></h1>
        <p>Experience the future of 3D printing. Customize your dream into reality with our precision-crafted technology.</p>
        <a href="services.php"><button>Read More</button></a>

      </div>
    </div>

    <div class="social-icons">
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter"></i>
    </div>
  </div>

  <!-- Main Section -->
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="services.php">Services</a>
  <a href="contact.php">Contact</a>
  <a href="login.php"><button>Log In</button></a>
</div>


    <div class="arrow left"><i class="fas fa-chevron-left"></i></div>
    <div class="arrow right"><i class="fas fa-chevron-right"></i></div>
  </div>
</body>
</html>
