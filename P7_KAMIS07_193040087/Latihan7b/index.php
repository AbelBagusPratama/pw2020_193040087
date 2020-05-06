<?php
require 'php/functions.php';

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

<html>

<head>
    <title>Latihan7c</title>
</head>

<body>
    <div class="container">
    <h3>Buah</h3>
    <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if (empty($buah)) : ?>
    <h1>Data Tidak Ditemukan</h1>
    <?php else : ?>
            <?php foreach ($buah as $b) : ?>
                <a href="php/detail.php?id=<?= $b['id']?>">
                    <?= $b["nama"] ?>
                    <br><br>
                </a>
            <?php endforeach; ?>
            <?php endif; ?>
    </div>
    <a href="php/login.php">
                <button type="">
                Masuk Halaman Admin
                </button>
    </a>
</body>

</html>