<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="item2.css">
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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#customer">customer</a></li>
        </ul>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart'></i>
            <a href="../login1/Login1.php"><i class='bx bx-log-in'></a></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here...">
        </div>
    </header>
    <!-- home  -->
    <section class="home" id="home">
        <div class="home-text">
            <h1> Selamat Datang di <br><span> Space Tech </span></h1>
            <p>Pilih produk yang kamu sukai lalu klik Beli ayo jangan sampe kehabisan.</p>
            <a href="../catalog/catalog.php" class="btn"> Catalog </a>
        </div>
        <div class="home-img">
            <img src="" alt="">
        </div>
    </section>
    <!-- about -->
    <section class="about" data-aos="fade-up" data-aos-duration="2000" id="about">
        <div class="about-img">
            <img src="img/earth.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our About</h2>
            <p>Toko kami berdiri pada Tahun 2010 yang di buat oleh PT.FIN</p>
            <p>Lalu pada Tahun 2011 kami mencoba untuk membuat website agar </p>
            <p>para customer bisa beli secara online dan melihat hp keluaran terbaru.</p>
            <a href="#" class="btn">Learn more</a>

        </div>
    </section>
    <!-- product -->
    <section class="product" data-aos="zoom-in" data-aos-duration="2000" id="product">
        <div class="heading">
            <h2>Our best product</h2>
        </div>
        <!-- container -->
        <div class="product-container">
            <div class="box">
                <img src="img/ip12.png" alt="iphone">
                <h3> Iphone 12 </h3>
                <div class="content">
                    <span>Rp. 12.499.000</span>
                    <a href="../detailitem/detail.php">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/ip13.png" alt="iphone">
                <h3> Iphone 13 </h3>
                <div class="content">
                    <span>Rp.15.199.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/ip14.png" alt="iphone">
                <h3> Iphone 14 </h3>
                <div class="content">
                    <span>Rp.15.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/samsungs23.png" alt="samsung">
                <h3> Samsung s23 Ultra</h3>
                <div class="content">
                    <span>Rp.21.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/zfold.png" alt="samsung">
                <h3> Samsung Galaxy Z fold 4</h3>
                <div class="content">
                    <span>Rp.24.999.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="img/minot12.png" alt="xiamo">
                <h3> Xiaomi Redmi note 12 </h3>
                <div class="content">
                    <span>Rp.4.599.000</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- customer -->
    <section class="customer" id="customer">
        <div class="heading">
            <h2> Our customer </h2>
        </div>
        <!-- container -->
        <div class="customer-container" data-aos="zoom-out" data-aos-duration="2000">
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p> Mantap bro hp nya original dan bagus.</p>
                <h2> Jackma </h2>
                <img src="img/jackma.jpg" alt="jack">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p> Apik tenan mas'e muantap poll.</p>
                <h2> Elon Musk </h2>
                <img src="img/elon.jpg" alt="elon">
            </div>
            <div class="box">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p> Worth it banget gaes.</p>
                <h2> Steve jobs </h2>
                <img src="img/steve.jpeg" alt="steve">
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>