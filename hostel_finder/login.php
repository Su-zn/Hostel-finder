<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Hostel_finder</title>
</head>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['submit'])) {
        $username = stripslashes($_POST['username']);   
        $password = stripslashes($_POST['password']);
        $query    = "SELECT * FROM `loginsystem` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows) {
            $_SESSION['username'] = $username;
            header("Location:home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<body>
<section class="sign-up-form">
    <form method="post" action="#0">
    <div class="sign-up-form" id="sign up">
        <h1>Login</h1>
            <input type="text" name="username" class="input-box" placeholder="username" required>
            <br><br>
            <input type="password" name="password"class="input-box" placeholder="Password" required>
            <br><br>
            <button type="submit" name="submit">Login
            <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button>
            <!-- <button type="submit" name="submit" class="signup-btn">login</button>  -->
            <p>You dont have Account?<a href="signup.php">Signup</a>
    </form>
    </div>
</section>
</body>
<style>
    body{
        background-color:#A52A2A;
    }
    .sign-up-form{
        background-color:#A52A2A;
    }
</style>
</html>
<?php
    }
    ?>