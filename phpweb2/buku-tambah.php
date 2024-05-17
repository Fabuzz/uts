<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Riwayat Buku</title>
    <style>
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid;
        }

        input[type=text] {
            width: 100%;
            border: 1px solid;
            padding: 5px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>
    <h1>Tambah Riwayat Buku</h1>
    <a href="/buku.php">Kembali ke Buku</a>
    <div class="content">

        <form action="buku-store.php" method="post">
            
            <div>
                <label>Nama Buku</label>
                <input type="text" name="nama_buku">
            </div>
            <div>
                <label>Penulis</label>
                <input type="text" name="penulis">
            </div>
            <div>
                <label>Penerbit</label>
                <input type="text" name="penerbit">
            </div>
            <div>
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit">
            </div>
            <div>
                <label>Jenis</label>
                <select name="jenis_buku">
                    <option value="Novel">Novel</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Dongeng">Dongeng</option>
                    <option value="Legenda">Legenda</option>
                </select>
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html>