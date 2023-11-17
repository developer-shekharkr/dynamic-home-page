<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
            <a href="./" class="company-logo">
                <img src="./images/SHEKHAR.png" alt="company logo">
            </a>

            <div class="nav-links">
                <ul class="flex">
                    <li><a href="#" class="hover-link">Products</a></li>
                    <li><a href="#" class="hover-link">Customer</a></li>
                    <li><a href="#" class="hover-link">Pricing</a></li>
                    <li><a href="#" class="hover-link">Resources</a></li>
                    <li><a href="#" class="hover-link secondary-button">Sign in</a></li>
                    <li><a href="./signup.php" class="hover-link primary-button">Sign up</a></li>
                </ul>
            </div>
            <hr>
        </div>
    </nav>
    
    <div class="form ">
    <h2>Log <span style="color:aliceblue">In</span> </h2>
    <form action="login-check.php" method="POST">
        <input name="username" type="text" placeholder=" Enter User Name"><br>
        <input name="pass" type="text" placeholder=" Password"><br>
        <button name="login" class="secondary-button">Log In</button><br>
         Not Registered ? <a href="./signup.php">Register Here</a>
         </form>
    </div>
    <!--  chat -->
    <img class="chat" src="./images/chat.jpg">
</body>
</html>