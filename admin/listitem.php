<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


require 'functions.php';

// pagination
// konfirgurasi
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM catalog"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
//  jika  = 2, awalData = 4
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$item = query("SELECT * FROM catalog LIMIT $awalData, $jumlahDataPerHalaman");

//  tombol cari di klik
if (isset($_POST["cari"])) {
    $item = cari($_POST["keyword"]);
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>

<body>
    <a href="dashboard.php">Back</a> |
    <a href="print.php" target="blank">Cetak</a>


    <h1> Daftar Item </h1>
    <a href="tambah.php">Tambah Item Catalog</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    </form>
    <br>
    <div class="contianer">

        <!-- navigasi -->

        <?php if ($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
            <?php else : ?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>


        <br>

        <table border=" 1" cellpadding="10" cellspacing="0">

            <tr>

                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Judul </th>
                <th>Deskripsi</th>
                <th>Harga</th>



            </tr>

            <?php $i = 1; ?>
            <?php foreach ($item as $row) : ?>
                <tr>

                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('Yakin nich??');">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?> " width="50"></td>
                    <td><?= $row["judul"]; ?></td>
                    <td><?= $row["deskripsi"]; ?></td>
                    <td><?= $row["harga"]; ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>



        </table>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>