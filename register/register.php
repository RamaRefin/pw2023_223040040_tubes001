<?php
require '../admin/functions.php';

if (isset($_POST["signup"])) {

    if (registrasiuser($_POST) > 0) {
        echo "<script>
        alert('Akun Berhasil di tambahkan!')
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
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
            <i class='bx bx-cart'></i>
            <i class='bx bx-search' id="search-icon"></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>
    <!-- halaman signup -->

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>USER REGISTER</h2>
                    <div class="inputbox">
                        <input type="text" name="username1" id="username1" required>
                        <label for="username1">Username <label>
                    </div>
                    <div class="inputbox">
                        <input type="Password" name="password2" id="password2" required>
                        <label for="password2">Password <label>
                    </div>
                    <div class="inputbox">
                        <input type="Password" name="password3" id="password3" required>
                        <label for="password3">Confirm Password <label>
                    </div>
                    <button type="submit" name="signup">Sign Up</button>
                    <div class="register">
                        <p>Have a Account? <a href="../login1/login1.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
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
</body>

</html>