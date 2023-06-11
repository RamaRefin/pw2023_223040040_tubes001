<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}



require 'functions.php';
// apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {



    // cek apakah data berhasil atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di tambahkan!');
                document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
            <script>
                 alert('data gagal di tambahkan!');
                 document.location.href = 'index.php';
             </script>
";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Item</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="tambah.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="img/ibnu.jpg" alt="admin.png">
                        <span class="nav-item"> Admin </span>
                    </a></li>
                <li><a href="dashboard.php">
                        <i class="fas fa-solid fa-house"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                <li><a href="index.php">
                        <i class="fas fa-solid fa-boxes-stacked"></i>
                        <span class="nav-item">Item Detail</span>
                    </a></li>
                <li><a href="tambah.php">
                        <i class="fas fa-solid fa-tasks"></i>
                        <span class="nav-item">Add Item</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-cog"></i>
                        <span class="nav-item">Setting</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                <li><a href="logout.php" class="logout">
                        <i class="fas fa-solid fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
            </ul>
        </nav>

        <div class="container2">
            <form action="" method="post" enctype="multipart/form-data">
                <h1> Tambah Item </h1>
                <li>
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" required>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" required>
                </li>
                <li>
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" required>
                </li>
                <li>
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data!</button>
                </li>
            </form>
        </div>
    </div>

</body>

</html>