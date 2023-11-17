<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="./images/SHEKHAR.png">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
      <!-- top banner -->
      <div class="top-banner">
        <div class="container">
            <div class="small-bold-text banner-text">All  About Technology</div>
        </div>
    </div>
<!-- nav bar -->

<nav>
        <div class="container main-nav flex">
            <a href="./index.php" class="company-logo">
                <img src="./images/SHEKHAR.png" alt="company logo">
            </a>

            <div class="nav-links">
                <ul class="flex">
                    <li><a href="#" class="hover-link">Products</a></li>
                    <li><a href="#" class="hover-link">Customer</a></li>
                    <li><a href="#" class="hover-link">Pricing</a></li>
                    <li><a href="#" class="hover-link">Resources</a></li>
                    <li><a href="./login.php" class="hover-link secondary-button">Sign in</a></li>
                    <li><a href="#" class="hover-link primary-button">Sign up</a></li>
                </ul>
            </div>
            <hr>
        </div>
    </nav>
    <div class="signup">
    <div class="form ">
    <h2>Sign <span style="color:aliceblue">Up</span> </h2>
    <form action="./reg.php" method="POST">
        <input type="text" name="fullname" placeholder=" Enter Full Name"><br>
        <input type="text" name="email" placeholder=" Enter Email"><br>
        <input type="text" name="contact" placeholder=" Enter Contact"><br>
        <input type="text" name="pass" placeholder=" Password"><br>
        <button type="submit" name="signup" class="secondary-button">Sign Up</button><br>
         Have an Account ? <a href="./login.php">Log in Here</a>
         </form>
    </div>
    </div>
    <!--  chat -->
    <img class="chat" src="./images/chat.jpg">
</body>
</html>