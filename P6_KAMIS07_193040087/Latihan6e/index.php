<?php
    require 'php/functions.php';

    $buah = query("SELECT * FROM buah")
?>

<html>

<head>
    <title>Latihan6d_193040087</title>
</head>

<body>
    <div class="container">
    <h3>Buah</h3>
        <table border="1px">
            <?php foreach ($buah as $b) : ?>
                <a href="php/detail.php?id=<?= $b['id']?>">
                    <?= $b["nama"] ?>
                    <br><br>
                </a>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>