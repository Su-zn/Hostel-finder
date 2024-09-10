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
    header('Location:contact2.php');
}
else{
    echo 'error';
}
}
?>
<?php
include("navbar2.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<style>
    /* Reset some default browser styles */
    body, h1, h2, h3, p, ul, li, form, input, button {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    /* Global Styles */
    body {
      background-color: #f5f5f5;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header */
    

    /* Contact Section */
    .contact {
      background-color: #fff;
      padding: 80px 0;
    }

    .contact h2 {
      text-align: center;
      font-size: 32px;
      color: #333;
      margin-bottom: 40px;
    }

    .contact form {
      max-width: 400px;
      margin: 0 auto;
    }

    .contact label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #333;
    }

    .contact input,
    .contact textarea {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
      color: #333;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .contact textarea {
      height: 120px;
    }

    .contact button {
      display: block;
      background-color: #ff5a5f;
      color: #fff;
      font-weight: bold;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .contact button:hover {
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
    <div class="container">
   <section class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <form>
        <label for="name">Your Name</label>
        <input type="text" id="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" required>

        <label for="message">Your Message</label>
        <textarea id="message" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>
  <?php
  include("footer.php");
  ?>
</body>
</html>