<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["KODE_BUKU"])) {
    // Mendapatkan kode buku dari parameter URL
    $kode_buku = trim($_GET["KODE_BUKU"]);

    // Memeriksa apakah kode buku ada dalam file data_buku.txt
    $file_name = "DATABUKU.txt";
    $read = file($file_name);
    $found = false;
    $updated_content = '';

    foreach ($read as $buku) {
        $data_buku = explode("-", $buku);

        if ($data_buku[0] == $kode_buku) {
            $found = true;
            continue; // Mengabaikan data buku yang akan dihapus
        }

        $updated_content .= $buku;
    }

    if ($found) {
        // Menulis kembali isi file buku.txt setelah data buku dihapus
        file_put_contents($file_name, $updated_content);
        echo "DATA BUKU BERHASIL DI HAPUS";
    } else {
        echo "BUKU TIDAK ADA";
    }
} else {
    echo "Permintaan tidak valid";
}
echo '<br><br><a href="BACA.php">Lihat Data</a>';

?>