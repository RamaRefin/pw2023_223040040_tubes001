<?php

require '../admin/functions.php';
$id = $_GET['id'] ?? '';
$conn = mysqli_connect("localhost", "root", "", "spacetech");
$catalog = query("SELECT * FROM catalog WHERE id = $id")[0];
$query = ("SELECT * FROM catalog WHERE id = $id")[0];
$catalog = $conn->query($query);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="detail.css">
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
            <a href="../logoutus/logoutus.php"><i class='bx bx-log-out'></a></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>



    <!-- detail produk -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="img/<?= $catalog['gambar'] ?>" alt="" width="80%" id="productimg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="img/ip12.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/ip12g.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/ip12p.png" alt="" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="img/ip12w.png" alt="" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p> Home / Phone </p>
                <h1> <?= $catalog['judul'] ?></h1>
                <h4> <?= $catalog['deskripsi'] ?></h4>
                <select>
                    <option>Select Ram </option>
                    <option>64GB</option>
                    <option>128GB</option>
                    <option>256GB</option>
                </select>
                <input type="number" values="1" require>
                <a href="../pembayaran/formpayment.php" class="btn">Add To Cart</a>
                <h3> Product Detail </h3>
                <p> <?= $catalog['harga'] ?></p>
                <h5>
                    Isi Kotak :
                    <h5>iPhone dengan iOS 14.</h5>
                    <h5>Kabel USB-C ke Lightning.</h5>
                    <h5> Buku Manual dan dokumentasi lain.</h5>
                </h5>
            </div>
        </div>
    </div>


    <!-- footer section -->
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
    <script>
        var productimg = document.getElementById("productimg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            productimg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            productimg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            productimg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            productimg.src = smallimg[3].src;
        }
    </script>





    <script src=" https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="main1.js"></script>

</body>

</html>