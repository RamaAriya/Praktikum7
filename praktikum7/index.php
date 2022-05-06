<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu | Hotel Konohagakure</title>
</head>

<body>
    <header>
        <h3>Daftar Tamu</h3>
        <h1>HOTEL Konohagakure</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftartamu.php">Daftar Baru</a></li>
            <li><a href="list-tamu.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Tamu Berhasil!";
            } else {
                echo "Pendaftaran Tamu gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>