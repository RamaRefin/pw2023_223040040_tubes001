<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$catalog = query("SELECT * FROM catalog");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Item</title>
</head>
<body>
    <h1>Daftar Item</h1>
    <table border=" 1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Judul </th>
            <th>Deskripsi</th>
            <th>Harga</th>
        </tr>';
$i = 1;
foreach ($catalog as $row) {
    $html .= '<tr>
                    <td>' . $i++ . '</td>
                    <td><img src="img/' . $row["gambar"] . '" width="50"></td>
                    <td>' . $row["judul"] . '</td>
                    <td>' . $row["deskripsi"] . '</td>
                    <td>' . $row["harga"] . '</td>
           </tr>';
}

$html .= '</table>
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output('daftar-item.pdf', "\Mpdf\Output\Destination::INLINE");
