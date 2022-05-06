<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tamu | Hotel Konohagakure</title>
</head>

<body>
    <header>
        <h3>Tamu yang sudah check-in</h3>
    </header>

    <nav>
        <a href="form-daftartamu.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id_Bt</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Isi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM buku_data";
        $query = mysqli_query($db, $sql);

        while($tamu = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$tamu['ID_BT']."</td>";
            echo "<td>".$tamu['NAMA']."</td>";
            echo "<td>".$tamu['EMAIL']."</td>";
            echo "<td>".$tamu['ISI']."</td>";

            echo "<td>";
            echo "<a href='Edit.php?id=".$tamu['ID_BT']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$tamu['ID_BT']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>