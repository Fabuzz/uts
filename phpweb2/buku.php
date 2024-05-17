<?php
session_start();
require_once "app.php";

$p = getAllData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Buku</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Riwayat Buku</h1>

    <a href="/index.php">Kembali ke Halaman Buku</a>

    <br>

    <a href="/buku-tambah.php">Tambah Buku</a>

    <br>
    <br>

    <?php if (isset($_SESSION['BERHASIL_TAMBAH_BUKU'])) : ?>
        <p><?= $_SESSION['BERHASIL_TAMBAH_BUKU'] ?></p>
        <?php session_unset(); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jenis</th>
                <th>Lebih Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($p as $k => $v) : ?>
                <tr>
                    <td><?= $v['nama_buku'] ?></td>
                    <td><?= $v['penulis'] ?></td>
                    <td><?= $v['penerbit'] ?></td>
                    <td><?= $v['tahun_terbit'] ?></td>
                    <td><?= $v['jenis_buku'] ?></td>
                    <td>
                        <a href="<?= "/buku-detail.php?id={$v['id']}" ?>">Detail</a>
                        <a href="<?= "/buku-edit.php?id={$v['id']}" ?>">Edit</a>
                        <a href="<?= "/buku-hapus.php?id={$v['id']}" ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php
mysqli_close($conn);
?>