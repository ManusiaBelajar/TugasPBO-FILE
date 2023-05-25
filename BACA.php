<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Data Buku</h2>";
    $file_name = "DATABUKU.txt";
    $read = file($file_name);
    ?>

    <table border=10>
        <thead>
            <tr>
                <th>KODE BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>PENERBIT</th>
                <th>TAHUN TERBIT</th>
                <th>JUMLAH HALAMAN</th>
                <th>KATEGORI</th>
                <th>COVER BUKU</th>
            </tr>
        </thead>
        <tbody>
           
           <?php

            foreach ($read as $buku){
            $DATABUKU = explode("-", $buku);
            ?>
            <tr>
                <td><?php echo $DATABUKU[0];?></td>
                <td><?php echo $DATABUKU[1];?></td>
                <td><?php echo $DATABUKU[2];?></td>
                <td><?php echo $DATABUKU[3];?></td>
                <td><?php echo $DATABUKU[4];?></td>
                <td><?php echo $DATABUKU[5];?></td>
                <td><?php echo $DATABUKU[6];?></td>
                <td><img src="upload/<?php echo $DATABUKU[7];?>" . width="200" height="100"></td>
                <td>
                    <a href="HAPUS.PHP?KODE_BUKU=<?php echo $DATABUKU[0];?>">HAPUS</a>
                    <a href="FORMEDIT.PHP?KODE_BUKU=<?php echo $DATABUKU[0];?>">UBAH</a>
                </td>   
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br><br><a href="FORMULIR.php">KEMBALI KE FORMULIR</a>
</body>
</html>