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
<?php
    $namaDepan = 'Agus';
    $namaBelakang = 'Supriyatna';

    $namaLengkap = $namaDepan . ' ' . $namaBelakang;

    echo 'Nama saya adalah ' . $namaLengkap;
    echo "<br>Nama saya adalah $namaLengkap";

    $tglMasuk = 2021;
    $tglmasuk = 2020;
    echo "<br>Tanggal masuk kuliah $tglMasuk";
    echo "<br>Tanggal masuk kuliah $tglmasuk";
?>
</body>
</html>