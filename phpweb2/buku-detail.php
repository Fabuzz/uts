<?php
require_once "app.php";

$id = $_GET['id'];

$d = findBukuByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
</head>

<body>
    <h1>Riwayat Buku Detail</h1>

    <a href="/buku.php">Kembali ke Buku</a>

    <br>
    <br>

    <p>Nama Buku : <?= $d['nama_buku'] ?></p>
    <p>Penulis : <?= $d['penulis'] ?></p>
    <p>Penerbit : <?= $d['penerbit'] ?></p>
    <p>Tahun Terbit : <?= $d['tahun_terbit'] ?></p>
    <p>Jenis Buku : <?= $d['jenis_buku'] ?></p>
    <p>Created At : <?= $d['created_at'] ?></p>
    <p>Updated At : <?= $d['updated_at'] ?></p>

</body>

</html>

<?php
mysqli_close($conn);
?>