<?php
    require 'php/functions.php';

    $buah = query("SELECT * FROM buah")
?>

<html>

<head>
    <title>Latihan5b_193040087</title>
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

    td img {
        width: 100px;
        height: 100px;
    }
</style>

<body>
    <h3>Buah</h3>
    <div class="container">
    <?php foreach ($buah as $row) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $row['id'] ?>">
                <?= $row["Nama Buah"] ?>
            </a>
        </p>
    <?php endforeach; ?>
    </div>
</body>

</html>