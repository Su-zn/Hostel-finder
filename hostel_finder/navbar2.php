<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dashboard.php">
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <style>
  header{
      background-color: red rgb(128, 84, 84);
      padding: 20px 0;
      box-shadow: 0 2px 4px rgba(147, 36, 36, 0.1);
    }

    .logo img {
      height: 80px;

    }

    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    header{
      background-color:#b52a2a;
      padding:20px;
    }

   
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      text-align:center;
    }

    nav ul li {
      display: inline-block;
    }

    nav ul li a {
      display: block;
      color: #fff;
      text-align: center;
      padding: 10px 20px;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    /* Optional: Add more specific styles to the active link */
    nav ul li a.active {
      background-color: #ccc;
      color: #333;
    }
    </style>
 <header>
  <nav>
    <ul>
    <div class="logo">
    <img src="images\hf (1).png" alt="Logo">
      <li><a href="home.php">Home</a></li>
      <li><a href="index2.php">Explore</a></li>
      <li><a href="mycart.php">My Bookings</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a><?php
      include("dashboard.php")
      ?></a></li>
</div>
    </ul>
  </nav>
</header>
</body>
</html>