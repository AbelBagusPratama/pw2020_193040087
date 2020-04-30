<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$buah = query("SELECT * FROM buah");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td img {
        width: 100px;
        height: 100px;
    }
</style>
<body>
<div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <table border="1" cellpadding="13" cellpading="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama Buah</th>
            <th>Vitamin</th>
            <th>Manfaat</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($buah as $b) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $b["Foto"]; ?>" alt=""></td>
                <td><?= $b["nama"]; ?></td>
                <td><?= $b["Vitamin"]; ?></td>
                <td><?= $b["Manfaat"]; ?></td>
                <td><?= $b["Harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>