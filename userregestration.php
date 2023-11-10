<!DOCTYPE html>
<html lang="en">
<head>
    <title>Myarticel.com</title>
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
            <h1>Myarticle.com <br><span>Sing Up To Read</span> <br></h1>
            <p class="par">Write what you fell,what you see, Lets connect with people and share<br>your though....<br>* We are Here to connect you *</p>
            <button class="cn"><a href="writerlogin.php">WRITE ARTICLE</a></button>
            <div class="form">
                <form action="userreg.php" method="POST" name="myForm">
                    <h2>Reader Registration</h2>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <input type="text" name="name" placeholder="Enter Name" required>
                    <button class="btnn" type="submit">submit</button>
                    <p class="link">GO BACK TO<br><a href="userlogin.php">Login</a></p>
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
