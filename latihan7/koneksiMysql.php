<html>
    <head>
        <title>Koneksi Database Mysql</title>
</head>
<body>
    <h1>Demo Koneksi Database Mysql</h1>
    <?php
    $con = mysqli_connect("localhost","root","","my_db");

    // check connection
    if (mysqli_connect_errno()) {
        echo "failed to connect to MySql: " . mysqli_connect_error()
        ;
        exit();

    }
    ?>
</body>
    </html>