<?php
require_once "app.php";
session_start();

$n = bukuBaru($conn, $_POST);

mysqli_close($conn);

if (is_null($n)) {
    $_SESSION['BERHASIL_TAMBAH_BUKU'] = "Gagal Menambah Data";
} else {
    $_SESSION['BERHASIL_TAMBAH_BUKU'] = "Berhasil menambah data nama buku: {$_POST['nama_buku']}, penulis: {$_POST['penulis']}, 
    penulis: {$_POST['penulis']},tahun terbit: {$_POST['tahun_terbit']} jenis: {$_POST['jenis_buku']}";
}

header("Location: /buku.php");
die();