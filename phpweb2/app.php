<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Gagal konek ke database: " . mysqli_connect_error());
}

function getAllData($conn)
{
    $sql = "SELECT * FROM buku";
    $result = mysqli_query($conn, $sql);

    $data = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

function findBukuByID($conn, $id)
{
    $sql = "SELECT * FROM buku WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function bukuBaru($conn, $data)
{
    $sql = "INSERT INTO buku
    (nama_buku, penulis, penerbit, tahun_terbit, jenis_buku, created_at, updated_at)
    VALUES (
        '{$data['nama_buku']}', 
        '{$data['penulis']}', 
        '{$data['penerbit']}', 
        '{$data['tahun_terbit']}', 
        '{$data['jenis_buku']}', 
        NOW(), 
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function hapusdata($conn, $id)
{
    // sql to delete a record
    $sql = "DELETE FROM buku WHERE id = $id ";
    if (mysqli_query($conn, $sql)) {
        echo "berhasil menghapus data produk";
    } else {
        echo "Error deleting record: gagal menghapus " . mysqli_error($conn);
    }

    mysqli_close($conn);
}