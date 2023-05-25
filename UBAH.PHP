<?php
if ($_POST) {
    $file_name = "DATABUKU.txt";
    $read = file($file_name);

    $kode_buku = $_POST['KODE_BUKU'];

    foreach ($read as $key => $buku) {
        $data_buku = explode("-", $buku);
        if ($data_buku[0] === $kode_buku) {
            // Update data sesuai dengan input baru
            $data_buku[1] = $_POST['JUDUL'];
            $data_buku[2] = $_POST['PENGARANG'];
            $data_buku[3] = $_POST['PENERBIT'];
            $data_buku[4] = $_POST['TAHUN_TERBIT'];
            $data_buku[5] = $_POST['JUMLAH_HALAMAN'];
            $data_buku[6] = $_POST['KATEGORI'];

            // Menghapus karakter newline pada gambar sebelumnya
            $data_buku[7] = str_replace("\n", "", $data_buku[7]);

            // Cek apakah ada gambar baru yang diupload
            if ($_FILES['file']['size'] > 0) {
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                $data_buku[7] = basename($_FILES['file']['name']);
            }

            // Gabungkan data kembali menjadi string
            $read[$key] = implode("-", $data_buku) . "\n";

            // Simpan perubahan ke file
            file_put_contents($file_name, $read);
            echo "DATA BERHASIL DI UBAH";
            echo '<br><br><a href="BACA.php">LIHAT DATA</a>';

            break;
        }
    }
}
?>