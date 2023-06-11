<?php
require 'functions.php';
$item = query("SELECT * FROM catalog");
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

    <h1> Daftar Item </h1>
    <a href="tambah.php">Tambah Item Catalog</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

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


</body>

</html>