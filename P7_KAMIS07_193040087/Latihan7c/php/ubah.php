<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$b= query("SELECT * FROM buah WHERE id = $id")[0];
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil diubah')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal diubah')
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
<h3> Form Ubah Data</h3>
<form action="" method="post">
<input type= "hidden" name="id" value="<?= $b['id']; ?>">
<ul>
    <li>
        <label for="foto">Foto:</label><br>
        <input type="text" name="foto" id="foto" required value="<?= $b['Foto'];?>"  ><br><br>
    </li>
    <li>
        <label for="nama">Nama Buah:</label><br>
        <input type="text" name="nama" id="nama"  required value="<?= $b['nama'];?>" ><br><br>
    </li>
    <li>
        <label for="vitamin">Vitamin:</label><br>
        <input type="text" name="vitamin" id="vitamin"  required value="<?= $b['Vitamin'];?>" ><br><br>
    </li>    
    <li>
        <label for="manfaat">Manfaat:</label><br>
        <input type="text" name="manfaat" id="manfaat" required value="<?= $b['Manfaat'];?>" ><br><br>
    </li>    
    <li>
        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $b['Harga'];?>" ><br><br>
    </li>
    <br>
    <button type="submit" name="ubah">Ubah Data</button>
    <button type="submit">
        <a href="../index.php" style=" text-decoration:none; color:black;">Kembali</a>
    </button>
</ul>            
</body>
</html>


