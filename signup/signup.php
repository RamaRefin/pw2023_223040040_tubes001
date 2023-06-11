<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="signup.css">
</head>

<body>

    <!-- //navbar// -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">GVerse</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../halamandepan/index.php">Home</a>
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
                <div class="button">
                    <a class="btn btn-outline-secondary" href="../login/Login.php" role="button">Login</a>

                    <a class="btn btn-success" href="../signup/signup.php" role="button">SignUp</a>
                </div>

            </div>
        </div>
    </nav>


    <!-- halaman signup -->

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Sign Up</h2>
                    <div class="inputbox">
                        <input type="Username" required>
                        <label for="">Username <label>
                    </div>
                    <div class="inputbox">
                        <input type="email" required>
                        <label for="">Email <label>
                    </div>
                    <div class="inputbox">
                        <input type="Password" required>
                        <label for="">Password <label>
                    </div>
                    <div class="inputbox">
                        <input type="Password" required>
                        <label for="">Confirm Password <label>
                    </div>
                    <button>Sign Up</button>
                    <div class="register">
                        <p>Have a Account? <a href="#">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>