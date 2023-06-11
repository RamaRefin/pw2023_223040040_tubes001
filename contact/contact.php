<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">GVerse</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../item/item.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../contact/contact.php">Contac us</a>
                    </li>
                </ul>
                <div class="button1">
                    <a class="btn btn-outline-secondary" href="../login/Login.php" role="button">Login</a>

                    <a class="btn btn-success" href="../signup/signup.php" role="button">SignUp</a>
                </div>
            </div>
        </div>`
    </nav>
























    <!-- CONTACT -->
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, cupiditate.</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Bandung,<br>Gegerkalong,<br>4012</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>123-456-789</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Gverse@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2> Send Message </h2>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span> Full name </span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="" required="required">
                        <span> Email </span>
                    </div>
                    <div class="inputbox">
                        <textarea required="required"></textarea>
                        <span> Your Message... </span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>

</html>