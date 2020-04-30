<?php
    require 'php/functions.php';

    $buah = query("SELECT * FROM buah")
?>

<html>

<head>
    <title>Latihan6d_193040087</title>
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
        <table border="1px">
            <tr>
                <th>id</th>
                <th>Foto</th>
                <th>Nama Buah-Buahan</th>
                <th>Vitamin</th>
                <th>Manfaat</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($buah as $b) : ?>
                <tr>
                    <td><?= $b["id"]; ?></td>
                    <td><img src="assets/img/<?= $b['Foto']; ?>"></td>
                    <td><?= $b["nama"]; ?></td>
                    <td><?= $b["Vitamin"]; ?></td>
                    <td><?= $b["Manfaat"]; ?></td>
                    <td><?= $b["Harga"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>