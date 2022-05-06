<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-tamu.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM buku_data WHERE ID_BT=$id";
$query = mysqli_query($db, $sql);
$tamu = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Update Tamu | HOTEL Konohagakure</title>
</head>

<body>
    <header>
        <h3>Formulir Update Tamu </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $tamu['ID_BT'] ?>" />

        <p>
            <label for="NAMA">Nama: </label>
            <input type="text" name="NAMA" placeholder="Nama Lengkap" value="<?php echo $tamu['NAMA'] ?>" />
        </p>

        <p>
            <label for="EMAIL">Email: </label>
            <input type="text" name="EMAIL" placeholder="Email" value="<?php echo $tamu['EMAIL'] ?>" />
        </p>

        <p>
            <label for="ISI">Isi: </label>
            <textarea name="ISI"><?php echo $tamu['ISI'] ?></textarea>
        </p>
    
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>