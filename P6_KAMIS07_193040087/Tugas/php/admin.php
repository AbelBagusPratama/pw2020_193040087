<?php
require 'functions.php';

if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $buah = query("SELECT * FROM buah WHERE
    foto LIKE '%$keyword%'OR
    nama LIKE '%$keyword%'OR
    vitamin LIKE '%$keyword%'OR
    manfaat LIKE '%$keyword%'OR
    harga LIKE '%$keyword%' ");

}else{
    $buah = query("SELECT * FROM buah");
}

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
<div class="container">
<div class="add"><a href="tambah.php">Tambah Data</a><div>
    <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellpadding="13" cellpading="0">
        <tr>
            <th>id</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama Buah</th>
            <th>Vitamin</th>
            <th>Manfaat</th>
            <th>Harga</th>
        </tr>
<?php if(empty($buah)) : ?>
<tr>
    <td colspan="7">
    <h3>Data Tidak Di Temukan</h3>
    </td>
</tr>
    <?php else : ?> 
        <?php $i = 1; ?>
        <?php foreach($buah as $b) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $b['id']; ?>"> <button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $b["Foto"]; ?>" alt=""></td>
                <td><?= $b["nama"]; ?></td>
                <td><?= $b["Vitamin"]; ?></td>
                <td><?= $b["Manfaat"]; ?></td>
                <td><?= $b["Harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>