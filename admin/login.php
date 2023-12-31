<?php

session_start();
require 'functions.php';


// cek cookie
if (isset($_COOKIE['login']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasrkan id
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE
                id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan user
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}



if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE 
    username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {


        // cek password

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST["remember"])) {
                // cookie

                setcookie('yek', $row['id'], time() + 60);
                setcookie(
                    'key',
                    hash('sha256', $row['username']),
                    time() + 60
                );
            }

            header("Location: dashboard.php");
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
    <title>Halaman login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="" method="post">
                <h1> Halaman Login </h1>
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username / Password salah! </p>
                <?php endif; ?>

                <ul>
                    <li>
                        <label for="username">Username </label>
                        <input type="text" name="username" id="username" autocomplete="off">
                    </li>
                    <li>
                        <label for="password">Password </label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me </label>
                    </li>
                    <li>
                        <button type="submit" name="login">login</button>
                    </li>
                    <!-- <div class="register">
                        <p>Don't Have a Account <a href="registrasi.php">Register</a></p>
                    </div> -->
                </ul>


            </form>
        </div>
        <div class="right">
            <img src="img/8710439.png" alt="user">
        </div>
    </div>


</body>

</html>