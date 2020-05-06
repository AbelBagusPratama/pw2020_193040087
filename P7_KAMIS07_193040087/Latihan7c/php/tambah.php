<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';

if(isset($_POST['tambah'])){
    if (tambah($_POST) > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';   
             </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';   
             </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Form Tambah Data Buah</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="foto">Foto :</label><br>
                <input type="text" name="foto" id="foto" required>           
            </li>
            <li>
                <label for="nama">Nama Buah :</label><br>
                <input type="text" name="nama" id="nama" required>           
            </li>
            <li>
                <label for="vitamin">Vitamin :</label><br>
                <input type="text" name="vitamin" id="vitamin" required>           
            </li>
            <li>
                <label for="manfaat">Manfaat :</label><br>
                <input type="text" name="manfaat" id="manfaat" required>            
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
                   
            </li><br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="index.php">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>