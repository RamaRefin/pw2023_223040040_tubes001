<?php

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
</head>

<body>

    <h1> Tambah Item </h1>

    <form action="" method="post">
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
            <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </form>

</body>

</html>