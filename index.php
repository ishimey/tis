<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tourism");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tourism Information System</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #e0f7fa, #f9f9fb);
      color: #333;
      line-height: 1.6;
    }

    a { text-decoration: none; }

    nav {
      background-color: #004d40;
      padding: 14px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      border-bottom: 3px solid #DC143C;
    }

    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      flex-wrap: wrap;
      align-items: center;
    }

    nav ul li {
      margin: 5px 15px;
      color: white;
    }

    .username {
      font-weight: bold;
      color: #FFD700;
      margin-left: 10px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      font-weight: 600;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    nav ul li a:hover {
      background: linear-gradient(135deg, #DC143C, #003893);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transform: scale(1.05);
    }

    .hero {
      height: 75vh;
      background: url('public/nepal.jpeg') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top:0; left:0;
      width:100%; height:100%;
      background: rgba(0,0,0,0.35);
    }

    .hero h1 {
      position: relative;
      font-size: 42px;
      font-weight: 700;
      color: #fff;
      background: rgba(0,0,0,0.4);
      padding: 25px 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.5);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hero h1:hover {
      transform: scale(1.06);
      box-shadow: 0 15px 30px rgba(0,0,0,0.6);
    }

    .welcome-section {
      max-width: 800px;
      margin: 40px auto;
      text-align: center;
      padding: 0 20px;
    }

    .welcome-section h2 {
      font-size: 32px;
      color: #DC143C;
      margin-bottom: 20px;
    }

    .welcome-section p {
      font-size: 18px;
      color: #555;
      margin-bottom: 30px;
    }

    .button-group {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
    }

    .button-group a {
      padding: 12px 30px;
      background-color: #004d40;
      color: white;
      font-weight: 600;
      border-radius: 8px;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .button-group a:hover {
      background-color: #DC143C;
      transform: scale(1.05);
    }

    footer {
      padding: 30px;
      text-align: center;
      background-color: #004d40;
      color: #fff;
      font-weight: 600;
      margin-top: 50px;
      box-shadow: 0 -5px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <ul>
      <li><a href="About_Us.php">About Us</a></li>
      
      <li><a href="contacts.php">Contact</a></li>
      <?php if (isset($_SESSION["username"])) { ?>
        <li class="username"><?php echo $_SESSION["username"]; ?></li>
        <li><a href="logout.php">Logout</a></li>
      <?php } else { ?>
        
      <?php } ?>
    </ul>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <h1>EXPLORE NEPAL, EXPERIENCE WONDER</h1>
  </section>

  <!-- Welcome Section -->
  <section class="welcome-section">
    <h2>Welcome to Our Tourism Portal</h2>
    <p>Our system helps travelers discover Nepal’s beauty, plan trips, and explore destinations with ease. Join us in promoting sustainable tourism and cultural appreciation.</p>
    <div class="button-group">
      <a href="cities.php">Explore Destinations</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>© 2025 Tourism Information System | Designed by Ishim Ghimire</p>
  </footer>

</body>
</html>
