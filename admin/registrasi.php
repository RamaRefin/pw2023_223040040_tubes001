<?php

require 'functions.php';


if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('user baru di tambahkan');
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
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="registrasi.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="registrasi">
            <form action="" method="post">
                <h1>Halaman Registrasi</h1>
                <ul>
                    <li>
                        <label for="username">username </label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">password </label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <label for="password2">Confirmation Password </label>
                        <input type="password" name="password2" id="password2">
                    </li>
                    <li>
                        <button type="submit" name="register">Register</button>
                    </li>
                    <div class="register">
                        <p>Have a Account? <a href="login.php">Login</a></p>
                    </div>
                </ul>
            </form>
        </div>
        <div class="right">
            <img src="img/6974871.png" alt="">
        </div>
    </div>


</body>

</html>