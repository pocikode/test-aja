<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="form3.php" method="get">
    Nama Depan: <input type="text" name="namadepan"><br>
    Nama Belakang: <input type="tel" name="namabelakang"><br>
    <input type="submit" value="kirim" name="tombol">
</form>
    <?php
        if (isset($_GET['tombol'])) {
            $namaDepan = $_GET['namadepan'];
            $namaBelakang = $_GET['namabelakang'];
            echo "Nama Depan = " . $namaDepan;
            echo '<br>Nama Belakang = ' . $namaBelakang;
        }
    ?>
</body>
</html>