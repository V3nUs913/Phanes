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

    .sidebar {
      width: 35%;
      background-color: rgb(15, 150, 228);
      padding: 40px 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      color: white;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: bold;
      font-size: 1.5em;
      color: #fff;
    }

    .promo {
      margin-top: 60px;
    }

    .promo h1 {
      font-size: 2.5em;
      letter-spacing: 2px;
      color: #000;
    }

    .promo h1 span {
      color: #7b61ff;
    }

    .promo p {
      margin: 20px 0;
      color: #333;
      line-height: 1.6em;
    }

    .promo button {
      padding: 10px 20px;
      background-color: rgb(192, 191, 191);
      border: none;
      border-radius: 25px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .promo button:hover {
      background-color: rgb(36, 103, 248);
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

    .main {
      width: 65%;
      position: relative;
      background-size: cover;
      background-position: center;
      transition: background-image 1s ease-in-out;
    }

    .navbar {
      position: absolute;
      top: 30px;
      right: 40px;
      display: flex;
      align-items: center;
      gap: 30px;
      z-index: 2;
    }

    .navbar a {
      color: blue;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #ffd700;
    }

    .navbar button {
      padding: 8px 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .navbar button:hover {
      background-color: #e0e7ff;
      color: blue;
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(149, 215, 241, 0.6);
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 2;
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
  </div>

  <!-- Bagian Main -->
  <div class="main">
    <!-- Navbar -->
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
      <a href="login.php"><button>Log In</button></a>
    </div>

    <!-- Slider Arrows -->
    <div class="arrow left"><i class="fas fa-chevron-left"></i></div>
    <div class="arrow right"><i class="fas fa-chevron-right"></i></div>
  </div>

  <script>
    const images = [
      'https://i.pinimg.com/236x/60/de/83/60de832fcdeab6ec3a7eded588507cb9.jpg',
      'https://cdn.pixabay.com/photo/2021/01/11/08/07/bromo-5905724_960_720.jpg',
      'https://cdn.pixabay.com/photo/2017/05/31/17/44/bali-2369307_960_720.jpg'
    ];

    let index = 0;
    const main = document.querySelector('.main');

    function updateImage() {
      main.style.backgroundImage = `url('${images[index]}')`;
    }

    updateImage();

    document.querySelector('.arrow.right').addEventListener('click', () => {
      index = (index + 1) % images.length;
      updateImage();
    });

    document.querySelector('.arrow.left').addEventListener('click', () => {
      index = (index - 1 + images.length) % images.length;
      updateImage();
    });

    setInterval(() => {
      index = (index + 1) % images.length;
      updateImage();
    }, 5000);
  </script>

</body>
</html>
