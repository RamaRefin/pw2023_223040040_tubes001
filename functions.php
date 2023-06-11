<!-- koneksi database -->
<?php

$conn = mysqli_connect("localhost", "root", "", "spacetech");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// ambil data
function tambah($data)
{
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);


    // query insert data
    $query = "INSERT INTO catalog
  VALUES
  ('', '$judul', '$deskripsi', '$harga', '$gambar')
  ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM catalog WHERE id = $id");


    return mysqli_affected_rows($conn);
}



function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);


    // query insert data
    $query = "UPDATE catalog SET
                judul = '$judul',
                deskripsi = '$deskripsi',
                harga = '$harga',
                gambar = '$gambar'
                WHERE id = $id
                ";




    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>