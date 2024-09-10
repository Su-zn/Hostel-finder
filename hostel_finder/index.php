<?php
include("navbar.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <br>
    <div class="container">
        <br>
        <br>
        <h2>my Booking</h2>
        <form action="booking.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
            
            <input type="submit" value="Book">
        </form>
        <style>
            .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
}

h2 {
  text-align: center;
}

form label {
  display: block;
  margin-bottom: 10px;
}

form input[type="text"],
form input[type="email"],
form input[type="date"] {
  width: 100%;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-bottom: 10px;
}

form input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
            </style>
    </div>
</body>
</html>
