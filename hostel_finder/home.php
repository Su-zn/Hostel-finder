<?php
include("navbar2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<style>

/* style.css */

/* Reset some default browser styles */
body, h1, h2, h3, p, ul, li, form, input, button {

font-family: Arial, sans-serif;
}

/* Global Styles */
body {
background-color:#b52a2a;
width: 1500px;
}

.container {
max-width: 1200px
margin: 0 auto;
padding: 0 20px;
}

body {
margin: 0;
padding: 0;
font-family: Arial, sans-serif;
}


.hero {
text-align: center;
margin-top: 0px;
background-color:#b52a2a;
}

.hero h1 {
font-size: 48px;
color: #333;
margin-bottom: 20px;
}

.hero p {
font-size: 18px;
color: gold;
margin-bottom: 40px;
}

.cta-button {
display: inline-block;
background-color: #ff5a5f;
color: #fff;
text-decoration: none;
font-weight: bold;
padding: 10px 20px;
border-radius: 4px;
transition: background-color 0.3s;
}

.cta-button:hover {
background-color: #e53e43;
}

/* Features */
.features {
background-color: #fff;
padding: 80px 0;
}

.features h2 {
text-align: center;
font-size: 32px;
color: #333;
margin-bottom: 40px;
}

.feature-container {
display: flex;
justify-content: center;
align-items: flex-start;
}

.feature {
text-align: center;
margin: 0 20px;
max-width: 300px;
}

.feature img {
width: 100px;
height: 100px;
margin-bottom: 20px;
}

.feature h3 {
font-size: 24px;
color: #333;
margin-bottom: 10px;
}

.feature p {
color: #666;
}

/* Search */
.search {
background-color: #f5f5f5;
padding: 80px 0;
}

.search h2 {
text-align: center;
font-size: 32px;
color: #333;
margin-bottom: 40px;
}

.search form {
text-align: center;
}

.search input,
.search button {
display: block;
width: 100%;
padding: 10px;
margin-bottom: 10px;
font-size: 16px;
color: #333;
border: 1px solid #ccc;
border-radius: 4px;
}

.search button {
background-color: #ff5a5f;
color: #fff;
font-weight: bold;
border: none;
cursor: pointer;
transition: background-color 0.3s;
}

.search button:hover {
background-color: #e53e43;
}

/* Footer */
footer {
background-color: #333;
color: #fff;
padding: 20px 0;
text-align: center;
}

.footer-content {
display: flex;
flex-direction: column;
align-items: center;
}

.footer-content p {
margin-top: 10px;
font-size: 14px;
}

.social-icons a {
display: inline-block;
margin: 0 10px;
}

.social-icons img {
width: 24px;
height: 24px;
}
</style>
<div class="hero">
  <h1>Find Your Perfect Hostel</h1>
  <p>Discover and book the best hostels around the world.</p>
  <a href="#" class="cta-button">Get Started</a>
</div>
</header>

<section class="features">
<h2>Why Choose Hostel Booking?</h2>
<div class="feature-container">
  <div class="feature">
  <i class="fa-solid fa-eye fa-beat fa-2xl"></i>
  <br>
  <br>
    <h3>Wide Selection</h3>
    <p>Choose from thousands of hostels in various locations.</p>
  </div>
  <div class="feature">
    <i class="fa-sharp fa-solid fa-dollar-sign fa-beat fa-2xl"></i>
    <br>
    <br>
    <h3>Best Prices</h3>
    <p>Get the best deals and affordable prices for your stay.</p>
  </div>
  <div class="feature">
  <i class="fa-solid fa-face-smile fa-beat fa-2xl"></i>
  <br>
  <br>
    <h3>Easy Booking</h3>
    <p>Quick and hassle-free booking process with instant confirmation.</p>
  </div>
</div>
</section>
<section class="search">
<h2>Find Your Perfect Hostel</h2>
<form>
  <input type="text" placeholder="Destination" required>
  <input type="date" placeholder="Check-in Date" required>
  <input type="date" placeholder="Check-out Date" required>
  <input type="number" placeholder="Guests" min="1" required>
  <button type="submit">Search</button>
</form>
</section>
</body>
</html>