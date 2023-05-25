<?php

if ($_POST) {
    //variable penampung
    $LIBRARY = $_POST['KODE_BUKU'] . "-" . 
    $_POST['JUDUL'] . "-" . 
    $_POST['PENGARANG'] . "-" . 
    $_POST['PENERBIT'] . "-" . 
    $_POST['TAHUN_TERBIT'] . "-" . 
    $_POST["JUMLAH_HALAMAN"] . "-" . 
    $_POST["KATEGORI"] . "-" .
    $_FILES['file']['name'] . "\n";
    //simpan ke file
    $file_name = "DATABUKU.txt";
    
    //Memindahkan file yg diunggah ke lokasi yang diinginkan
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

    if (file_put_contents($file_name, $LIBRARY, FILE_APPEND) > 0) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }

    echo '<br><br><a href="FORMULIR.php">Kembali ke Form</a>';
    echo '<br><br><a href="BACA.php">Lihat Data</a>';
}

?>