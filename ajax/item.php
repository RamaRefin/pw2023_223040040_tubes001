<?php

require '../functions.php';


$keyword = $_GET["keyword"];



$query = "SELECT * FROM catalog
            WHERE
         judul LIKE '%$keyword%'
        ";
$item = query($query);
?>

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