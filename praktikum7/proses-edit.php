<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id= $_POST['id'];
    $nama = $_POST['NAMA'];
    $email = $_POST['EMAIL'];
    $isi = $_POST['ISI'];

    // buat query update
    $sql = "UPDATE buku_data SET NAMA='$nama', EMAIL='$email', ISI='$isi' WHERE ID_BT=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-tamu.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>