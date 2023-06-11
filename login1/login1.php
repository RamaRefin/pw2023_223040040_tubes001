<?php

session_start();

if (isset($_SESSION["login"])) {
    header("location: ../pembayaran/formpayment.php");
    exit;
}

require '../admin/functions.php';

if (isset($_POST["login"])) {

    $username1 = $_POST["username"];
    $password2 = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM  user WHERE username = '$username1'");


    //cek username

    if (mysqli_num_rows($result) === 1) {


        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password2, $row["password"])) {
            // set session
            $_SESSION["login"] = true;




            header("location: ../pembayaran/formpayment.php");
            exit;
        }
    }

    $error = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="login1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="img/icon.png" alt="icon">
        </a>
        <!-- menu icon -->
        <i class='bx bx-menu' id="menu-icon"></i>
        <!-- links -->
        <ul class="navbar">
            <li><a href="../item2/item2.php">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="../catalog/catalog.php">Product</a></li>
            <li><a href="#customer">customer</a></li>
        </ul>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart'></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>
    <!-- LOGIN -->

    <?php if (isset($error)) :  ?>
        <p> Username / Password salah </p>
    <?php endif; ?>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2> USER LOGIN </h2>
                    <div class="inputbox">
                        <label for="username">Username </label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="inputbox">
                        <label for="password">Password </label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#">Forget Password?</a></label>
                    </div>
                    <button type="submit" name="login">Log In </button>
                    <div class="register">
                        <p>Don't Have a Account <a href="../register/register.php">Register</a></p>
                    </div>

            </div>
        </div>



        </form>
    </section>

    <!-- FOOTER SECTION -->
    <section class="footer">
        <div class="footer-box">
            <h3> Space Tech </h3>
            <p> Follow us on social media.</p>
            <div class="social">
                <a href="#">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
            </div>
        </div>
        <div class="footer-box">
            <h3> Support us </h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Term of Use</a></li>
            <li><a href="#">Product</a></li>
        </div>
        <div class="footer-box">
            <h3> View guide </h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog post</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3> Contact </h3>
            <div class="contact">
                <span><i class='bx bx-map'></i> Gerlong hilir no.123, Bandung</span>
                <span><i class='bx bx-phone'></i> +62 234 345 567</span>
                <span><i class='bx bx-envelope'></i> spacetech@gmail.com </span>
            </div>
        </div>
    </section>
    <!-- copyright -->
    <div class="copyright">
        <p>&#169; All right Reserved</p>
    </div>





    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>