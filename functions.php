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


    //    upload gambar

    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    // query insert data
    $query = "INSERT INTO catalog
  VALUES
  ('', '$judul', '$deskripsi', '$harga', '$gambar')
  ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //  cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar dahulu!');
        </script>";
        return false;
    }

    // cek yg diupload adalah gambar
    $formatGambarValid = ['jpg', 'jpeg', 'png'];
    $formatGambar = explode('.', $namaFile);
    $formatGambar = strtolower(end($formatGambar));
    if (!in_array($formatGambar, $formatGambarValid)) {
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    // cek ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }


    // generate gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $formatGambar;


    // gambar siap di upload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }



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



function cari($keyword)
{
    $query = "SELECT * FROM catalog
               WHERE
            judul LIKE '%$keyword%'
                ";

    return query($query);
}


?>