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
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $buah["Foto"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $buah["Nama Buah"]; ?></p>
            <p><?= $buah["Vitamin"]; ?></p>
            <p><?= $buah["Manfaat"]; ?></p>
            <p><?= $buah["Harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>