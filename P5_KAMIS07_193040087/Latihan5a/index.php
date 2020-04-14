<?php 
    // melakukan koneksi ke database 
        $conn = mysqli_connect("localhost","root", "") or die("koneksi ke DB gagal");
        
        // Memilih database
        mysqli_select_db($conn,"tubes_193040087") or die("Database salah!");
        
        //query mengambil objek dari tabel didalam datanbase
        $result = mysqli_query($conn,"SELECT * FROM buah")

?>

<html>
    <head>
        <title>Latihan5a_193040087</title>
    </head>
    <style>
        table{
            background-color: white;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
        h a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
        td img{
            width: 100px;
            height: 100px;
        }
    </style>
    <body>
        <h3>Buah</h3>
        <div class="container">
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Buah-Buahan</th>
                <th>Vitamin</th>
                <th>Manfaat</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["No"]; ?></td>
                <td><img src="assets/Img/<?= $row['Foto']; ?>"></td>
                <td><?= $row["Nama Buah"]; ?></td>
                <td><?= $row["Vitamin"]; ?></td>
                <td><?= $row["Manfaat"]; ?></td>
                <td><?= $row["Harga"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
      </div>
    </body>
</html>
