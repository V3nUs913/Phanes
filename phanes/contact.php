<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Phanes - Contact</title>
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
      max-width: 600px;
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

    input, textarea {
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
      <a href="order.php">Order</a>
    </div>
  </div>

  <div class="container">
    <h2>Contact Us</h2>
    <form action="#" method="post">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="6" required></textarea>

      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>
