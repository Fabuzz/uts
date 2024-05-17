<?php
require_once "app.php";

$id = $_GET["id"];

if (hapusdata($conn, $id) > 0) {
    echo "<script> alert('data buku berhasil dihapus'); </script>
    ";
};


if ($conn) {
    header("Refresh: 0.5; url= /buku.php");
    echo "<script>alert('Hapus data produk Berhasil');</script>";
} else {
    echo "<script>alert('Gagal menghapus data buku');</script>";
}