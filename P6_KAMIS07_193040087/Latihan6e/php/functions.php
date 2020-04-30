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

    $row = [];
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

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buah WHERE id = $id ");
    
    return mysqli_affected_rows($conn);

}

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $vitamin = htmlspecialchars($data['vitamin']);
    $manfaat = htmlspecialchars($data['manfaat']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE buah
    SET
    Foto = '$foto',
    nama = '$nama',
    Vitamin = '$vitamin',
    Manfaat = '$manfaat',
    Harga = '$harga'
    WHERE id = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
