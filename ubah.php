<?php

require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data item berdasarkan id
$item = query("SELECT * FROM catalog WHERE id= $id")[0];




// apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di ubah
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di ubah!');
                document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
            <script>
                 alert('data gagal di ubah!');
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
    <title>Ubah Item</title>
</head>

<body>

    <h1> Ubah Item </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $item["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $item["gambar"]; ?>">
        <li>
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" required value="<?= $item["judul"]; ?>">
        </li>
        <li>
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" required value="<?= $item["deskripsi"]; ?>">
        </li>
        <li>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" required value="<?= $item["harga"]; ?>">
        </li>
        <li>
            <label for="gambar">Gambar</label>
            <img src="img/<?= $item['gambar']; ?>" width="50"> <br>
            <input type="file" name="gambar" id="gambar">
        <li>
            <button type="submit" name="submit">ubah Data!</button>
        </li>
    </form>

</body>

</html>