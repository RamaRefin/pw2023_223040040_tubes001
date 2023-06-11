<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../login1/login1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="formpayment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <!-- navbar  -->
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
            <li><a href="#product">Product</a></li>
            <li><a href="#customer">customer</a></li>
        </ul>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart'></i>
            <a href="../logoutus/logoutus.php"><i class='bx bx-log-out'></a></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>

    <!-- form pembayaran -->
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="tittle">Billing address </h3>

                    <div class="inputbox">
                        <span> Full name : </span>
                        <input type="text" placeholder="Agus">
                    </div>
                    <div class="inputbox">
                        <span> Email : </span>
                        <input type="email" placeholder="agus@examples.com">
                    </div>
                    <div class="inputbox">
                        <span> Address </span>
                        <input type="text" placeholder="no - street - local">
                    </div>
                    <div class="inputbox">
                        <span> City : </span>
                        <input type="text" placeholder="Jakarta">
                    </div>
                    <div class="flex">
                        <div class="inputbox">
                            <span> State : </span>
                            <input type="text" placeholder="Indonesia">
                        </div>
                        <div class="inputbox">
                            <span> Zip code : </span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="tittle">Payment </h3>

                    <div class="inputbox">
                        <span> Cards accepted :</span>
                        <img src="img/card_img.png" alt="">
                    </div>
                    <div class="inputbox">
                        <span> Name on Card : </span>
                        <input type="Text" placeholder="Mr agus">
                    </div>
                    <div class="inputbox">
                        <span> Credit card number : </span>
                        <input type="number" placeholder="111 222 333">
                    </div>
                    <div class="inputbox">
                        <span> Exp Month : </span>
                        <input type="text" placeholder="Janury">
                    </div>
                    <div class="flex">
                        <div class="inputbox">
                            <span> Exp Year : </span>
                            <input type="number" placeholder="2024">
                        </div>
                        <div class="inputbox">
                            <span> CVV </span>
                            <input type="text" placeholder="000">
                        </div>

                    </div>
                </div>
                <input type="submit" value="Procced to checkout" class="submit-btn">
        </form>
    </div>
    </div>

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
</body>

</html>