<?php

$conn = mysqli_connect("localhost", "root", "", "spacetech");
$query = "SELECT * FROM catalog";
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
    <link rel="stylesheet" href="catalog.css">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#customer">customer</a></li>
        </ul>
        <!-- search box -->
        <form action="" method="post">

            <input type="text" name="keyword" size="35" autofocus placeholder="Pencarian..." autocomplete="off" id="keyword">
            <button type="submit" name="cari" id="tombol-cari">Cari!</button>

        </form>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-cart'></i>
            <a href="login1.php"><i class='bx bx-log-in'></a></i>
        </div>
    </header>
    <!-- HOME -->
    <section class="home" data-aos="zoom-in-up" data-aos-duration="2000" id="home">
        <div class="home-text">
        </div>
        <div class="home-img">
            <img src="" alt="">
        </div>
    </section>

    <!-- product -->
    <section class="product" data-aos="zoom-out-up" data-aos-duration="2000" id="product">
        <div class="heading">
            <h2>Our product</h2>
        </div>
        <br><br>
        <!-- container -->
        <div id="container">
            <div class="product-container">
                <?php while ($row = mysqli_fetch_assoc($catalog)) { ?>
                    <div class="box">
                        <img src="img/<?php echo $row["gambar"]; ?>" alt="">
                        <h3><?= $row["judul"]; ?></h3>
                        <p><?= $row["deskripsi"]; ?>
                        <div class="content">
                            <span>
                                <p><?= $row["harga"]; ?></p>
                            </span>
                            <a href="detail.php" ?id=<?= $row['id'] ?>">add to cart</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </section>
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
    <script>
        AOS.init();
    </script>
    <script src="../js/script2.js"></script>

</body>

</html>