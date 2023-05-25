<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN BUKU-BUKU HEBAT</title>
</head>
<body>
    <h1> <center>-SELAMAT DATANG DI PERPUSTAKAAN KAMI-</center></h1>
    <center><h2>MASUKAN BUKU :</h2>
    <form action="SIMPANBUKU.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>KODE BUKU </td>
                <td><input type="text" name="KODE_BUKU"></td>
            </tr>
            <tr>
                <td>JUDUL BUKU </td>
                <td><input type="text" name="JUDUL"></td>
            </tr>
            <tr>
                <td>PENGARANG</td>
                <td><input type="text" name="PENGARANG"></td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td><input type="text" name="PENERBIT"></td>
            </tr>
            <tr>
                <td>TAHUN TERBIT</td>
                <td><input type="text" name="TAHUN_TERBIT"></td>
            </tr>
            <tr>
                <td>JUMLAH HALAMAN</td>
                <td><input type="text" name="JUMLAH_HALAMAN"></td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td><input type="text" name="KATEGORI"></td>
            </tr>
            <tr>
                <td>COVER BUKU</td>
                <td><input type="file" name="file" accept="image/*" id="file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="masukan ke file"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>