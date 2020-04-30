<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040087") or die("Database Salah");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $vitamin = htmlspecialchars($data['vitamin']);
    $manfaat = htmlspecialchars($data['manfaat']);
    $harga = htmlspecialchars($data['harga']);
    
    $query = "INSERT INTO buah
                     VALUES
                     ('', '$foto', '$nama', '$vitamin', '$manfaat', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>