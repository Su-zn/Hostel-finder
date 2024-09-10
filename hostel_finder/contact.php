<?php
include("db.php")
?>
<?php
    $con = mysqli_connect("localhost","root","","testing");
    // Check connection
    if (!$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
if(isset($_POST['submit'])){
    $name = $_POST['name'];
  $phone=$_POST['phone'];
   $email = $_POST['email'];
   $msg=$_POST['msg'];
   $sqll = "INSERT INTO `contact`(name,phone,email,msg) VALUES('$name','$phone','$email','$msg')";
   $results=mysqli_query($con,$sqll);
if($results){
    echo "<script>alert('submitted sucessfully')</script>";
    header('Location:contact.php');
}
else{
    echo 'error';
}
}
?>
<?php
include("navbar2.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<form method="POST" action="contact.php">
        <section class="contact">
            <h2 class="text-center">Contact Us</h2>
            <div class="form">
                <label for="full_name">Full Name:</label>
                <input class="form-input" type="text" id="full_name" name="full_name" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ-' ]+$" title="Enter a valid name" placeholder="Enter Your Name" required>

                <label for="phone">Phone Number:</label>
                <input class="form-input" type="text" id="phone" name="phone" pattern="9[5-8][0-9]{8}" title="Enter a valid phone number (e.g., 98XXXXXXXX)" placeholder="Enter Your Phone" required>

                <label for="email">Email Address:</label>
                <input class="form-input" type="email" id="email" name="email" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" title="Enter a valid email address" placeholder="Enter Your Email" required>

                <label for="msg">Message:</label>
                <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Elaborate your concern!!!!"></textarea>

                <button type="submit" name="submit" value="submit">Submit</button>
            </div>
        </section>
    </form>

    <style>
  body {
    font-family: Arial, sans-serif;
  }

  .contact {
    margin: 20px auto;
    max-width: 400px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .form-input {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #0056b3;
  }

  .text-center {
    text-align: center;
  }
</style>

</body>
</html>