<?php

    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php' ;

    $id = $_GET['id'];

    $buah = query("SELECT * FROM buah WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style>
    table {
        background-color: white;
        border: 1px solid black;
        text-align: center;
        font-size: 30px;
    }

    td {
        padding: 20px;

    }

    h3 {
        text-align: center;
        font-size: 50px;
        color: white;
    }

    h a {
        text-decoration: none;
        color: white;
        font-size: 50px;
    }

    .container .gambar{
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $buah["Foto"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $buah["nama"]; ?></p>
            <p><?= $buah["Vitamin"]; ?></p>
            <p><?= $buah["Manfaat"]; ?></p>
            <p><?= $buah["Harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>