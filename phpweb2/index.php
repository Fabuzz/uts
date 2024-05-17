<?php
require_once "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
        background-image: url("/img/narutoluffy.jpg");
        }

        h1{
            background-color: royalblue;
            text-align: left;
            padding: 20px;
        }

        a:link, a:visited {
        background-color: royalblue;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-left: 25px;
        }

        a:hover, a:active {
        background-color: plum;
        }

        p {
        text-indent: 50px;
        text-align: justify;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-align: center;
        text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Koleksi Buku <?= $dataDiri['nama'] ?></h1>
    <p class="uppercase">Ini adalah halaman buku favorit Saya</p>
    <div class="column"><a href="buku.php">Riwayat Buku</a></div>
</body>

</html>