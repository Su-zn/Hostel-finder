<?php
include("navbar2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images/pic1.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Royal Boys Hostel</h5>
                <p><i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
    Putalisadak,Kathmandu
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="2and3seater.php"><i class="fa-solid fa-bed">
  2 & 3 Seaters
</i>
</a>
<div class="card-body">
    <a href="logo1.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
                <p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="Royal Boys Hostel">
                <input type="hidden" name="price" value="10000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\pic2.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Moonlight Boys Hostel</h5>
                <p>
<i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
   Amarbatimarg,kathmandu
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="1and2,3seater.php"><i class="fa-solid fa-bed">
  1 , 2 & 3 Seaters
</i>
<div class="card-body">
    <a href="logo2.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
<p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="Moonlight Boys Hostel">
                <input type="hidden" name="price" value="10000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\pic2.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Radiant Girl's Hostel</h5>
                <p><i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
    Amarbatimarg,Kathmandu
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="2and3seater.php"><i class="fa-solid fa-bed">
  2 & 3 Seaters
</i>
<div class="card-body">
    <a href="logo4.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
<p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="Radiant Girl's Hostel">
                <input type="hidden" name="price" value="10000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\pic2.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">kritishree Girls Hostel</h5>
                <p>
<i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
    Dhovidhara,Kathmandu
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="rooms2.php"><i class="fa-solid fa-bed">
  All Seaters
</i>
<div class="card-body">
    <a href="logo5.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
<p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="kritishree Girls Hostel">
                <input type="hidden" name="price" value="10000">
              </div>
            </div>
          </form>
          <br>
          <br>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\pic2.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Peace Girls Hostel</h5>
                <p>
<i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
Purnachandi Marg, Lalitpur
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="rooms2.php"><i class="fa-solid fa-bed">
  All Seater
</i>
<div class="card-body">
    <a href="logo6.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
<p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="Peace Girls Hostel">
                <input type="hidden" name="price" value="12000">
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="post">
            <div class="card">
              <img src="images\pic2.jpg" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="card-title">Divine Youth Hostel</h5>
                <p>
<i class="fa-sharp fa-solid fa-location-dot fa-beat"></i>
Purnachandi Marg, Lalitpur
</p>
<p>
<i class="fa-solid fa-phone fa-bounce"></i>
    9851128131
</p>
<a href="1and2,3seater.php"><i class="fa-solid fa-bed">
  1 , 2 & 3 Seaters
</i>
<div class="card-body">
    <a href="logo3.php" class="card-link"><i class="fa-solid fa-map fa-beat">Map</i>
    </a>
  </div>
<p class="card-text">Price: Rs.10k-12k(nego)</p>
                <button type="submit" name="Add_to_booking" class="btn btn-info">Add to Booking</a>
                <input type="hidden" name="Item_name" value="Divine boys Hostel">
                <input type="hidden" name="price" value="12000">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>