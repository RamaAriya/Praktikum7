<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Tamu | Hotel Konohagakure</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Tamu</h3>
    </header>

    <form action="proses datatamu.php" method="POST">

        <fieldset>

        <p>
            <label for="NAMA">Nama: </label>
            <input type="text" name="NAMA" placeholder="Nama Lengkap" />
        </p>

        <p>
        <label for="EMAIL">Email: </label>
            <input type="text" name="EMAIL" placeholder="Email" />
        </p>
    

        <p>
            <label for="ISI">Isi: </label>
            <textarea name="ISI"></textarea>
        </p>
        
        <p>
        <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>