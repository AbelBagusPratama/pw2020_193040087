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
            <img src="../assets/img/<?= $b["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $b["id"]; ?></p>
            <p><?= $b["Foto"]; ?></p>
            <p><?= $b["nama"]; ?></p>
            <p><?= $b["Vitamin"]; ?></p>
            <p><?= $b["Manfaat"]; ?></p>
            <p><?= $b["Harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>