<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Hostel_finder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section class="sign-up-form">
    <form method="post" action="sucess.php">
    <div class="sign-up-form" id="sign up">
        <h1>sign up</h1>
            <input type="text"  name="fname" class="input-box" placeholder="First Name" required>
            <br><br>
            <input type="text" name="lname" class="input-box" placeholder="Last Name" required>
            <br><br>
            <input type="text" name="username" class="input-box" placeholder="username" required>
            <br><br>
            <input type="email" name="email" class="input-box" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" title="Valid the email address" placeholder="email" required>
            <br><br>
            <input type="password" name="password"class="input-box" placeholder="Password" required>
            <br><br>
            <button type="submit" name="submit">Sign up
            <div class="arrow-wrapper">
        <div class="arrow"></div>
    </div>
</button>
         <p>Already have an account?<a href="login.php">login</a>
            </form>
            </div>
</section>
<style>
    body{
        background-color:#A52A2A;
    }
    .sign-up-form{
        background-color:#A52A2A;
    }
</style>

</body>
</html>