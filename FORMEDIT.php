<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBAH DATA BUKU</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["KODE_BUKU"])) {
            // Mendapatkan kode buku dari parameter URL
            $kode_buku = trim($_GET["KODE_BUKU"]);

            // Memeriksa apakah kode buku ada dalam file buku.txt
            $file_name = "DATABUKU.txt";
            $read = file($file_name);
            $found = false;
            $selected_buku = [];

            foreach ($read as $buku) {
                $data_buku = explode("-", $buku);

                if ($data_buku[0] == $kode_buku) {
                    $found = true;
                    $selected_buku = $data_buku;
                    break;
                }
            }

            if ($found) {
                // Form edit buku
                // Ambil nilai kode_buku dari URL jika tersedia
                $kode_buku = $_GET['KODE_BUKU'] ?? '';?>

                <center>
                    <h3>Update Data Buku</h3>
                    <form action="UBAH.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>KODE BUKU</td>
                                <td><input type="text" name="KODE_BUKU" value="<?php echo "$kode_buku";?>"></td>
                            </tr>
                            <tr>
                                <td>JUDUL BUKU</td>
                                <td><input type="text" name="JUDUL" value="<?php echo "$selected_buku[1]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>PENGARANG</td>
                                <td><input type="text" name="PENGARANG" value="<?php echo "$selected_buku[2]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>PENERBIT</td>
                                <td><input type="text" name="PENERBIT" value="<?php echo "$selected_buku[3]";?>" required><br></td>
                            </tr>
                            <tr>
                                <td>TAHUN TERBIT</td>
                                <td><input type="text" name="TAHUN_TERBIT" value="<?php echo isset($selected_buku[4]) ? $selected_buku[4] : ''; ?>" required><br></td>
                            </tr>
                            <tr>
                                <td>JUMLAH HALAMAN</td>
                                <td><input type="text" name="JUMLAH_HALAMAN" value="<?php echo isset($selected_buku[5]) ? $selected_buku[5] : ''; ?>" required><br></td>
                            </tr>
                            <tr>
                                <td>KATEGORI</td>
                                <td><input type="text" name="KATEGORI" value="<?php echo isset($selected_buku[6]) ? $selected_buku[6] : ''; ?>" required><br></td>
                            </tr>
                            <tr>
                                <td>SAMPUL</td>
                                <td><input type="file" name="file" accept="image/*"><br></td>
                            </tr>
                            <?php
                               
                                echo "<tr><td><input type='submit' name='update' value='Perbarui'></td></td></tr>";
                            ?>
                        </table>
                    </form>
                </center>
            <?php
            } else {
                echo "Buku tidak ditemukan";
            }
        } else {
            echo "Permintaan tidak valid";
        }
    ?>
</body>
</html>