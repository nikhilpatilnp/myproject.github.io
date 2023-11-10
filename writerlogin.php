<!DOCTYPE html>
<html lang="en">
<head>
    <title>Myarticel.com - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon"></div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="index.php">ABOUT</a></li>
                    <li><a href="#">FEEDBACK</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div> 
        <div class="content">
        <h1>Myarticle.com <br><span>Write what you Fell</span> <br></h1>
            <p class="par">Write what you fell,what you see, Lets connect with people and share<br>your though....<br>* We are Here to connect you *</p>
            <button class="cn"><a href="userregestration.php">READ ARTICLE</a></button>
          
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "invalidSpecialKey") {
                        echo '<p class="error">Invalid special key</p>';
                    } elseif ($_GET['error'] == "loginFailed") {
                        echo '<p class="error">Invalid email or password</p>';
                    }
                }
            ?>
            <div class="form">
                <form action="login.php" method="POST" name="myForm">
                    <h2>Writer Login</h2>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="text" name="special_key" placeholder="Enter special key" required>

                    <button class="btnn" type="submit">submit</button>
                    <p class="link">NOT REGISTERED?<br><a href="writerreg.php">Register Now</a></p>
                    <p class="liw">Follow Us</p>
                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
