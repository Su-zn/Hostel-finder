<?php
include("navbar2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Rooms</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="room">
        <img src="images/doubleroom.jpg" alt="Double-seater Room">
        <div class="room-details">
            <h2>Double-Seater Room</h2>
            <p>Great for two friends</p>
            <ul>
                <li>2 Seater</li>
                <li> Bathroom</li>
                <li>Free Wi-Fi</li>
                <li>Lunch,Breakfast Included</li>
            </ul>
        </div>
    </section>
   
    <section class="room">
        <img src="images/tripleroom.jpg" alt="Three-Seater Room">
        <div class="room-details">
            <h2>Three-Seater Room</h2>
            <p>Perfect for a small group</p>
            <ul>
                <li>3 Seater</li>
                <li> Bathroom</li>
                <li>Free Wi-Fi</li>
                <li>Lunch,Breakfast Included</li>
            </ul>
        </div>
    </section>


    <style>
  /* Reset some default browser styles */
body, h1, h2, p, ul, li, img {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

header{
      background-color: red rgb(128, 84, 84);
      padding: 20px 0;
      box-shadow: 0 2px 4px rgba(147, 36, 36, 0.1);
    }


.room {
    background-color: #fff;
    border: 1px solid #ccc;
    margin: 20px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
}

img {
    max-width: 50%;
    height: 150px;
    border-radius: 5px;
    margin-right: 20px;
}

.room-details {
    flex: 1;
}

h2 {
    color: #ff3333; /* Red color */
    font-size: 24px;
    margin-bottom: 10px;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}

  </style>
    <?php
    include("footer.php")
    ?>
</body>
</html>
