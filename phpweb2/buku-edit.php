<?php
require_once "app.php";
$id = $_GET['id'];
// $p = $bukuEdit($id);

if (isset($_POST["submit"])) {
  $nama_buku = $_POST['nama_buku'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $jenis_buku = $_POST['jenis_buku'];

  $sql = "UPDATE buku SET nama_buku ='$nama_buku', penulis ='$penulis', penerbit ='$penerbit', 
         tahun_terbit ='$tahun_terbit', jenis_buku='$jenis_buku' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Refresh: 0.5; url= /buku.php");
    exit;
  } else {
    echo "Failed: " . mysqli_error($conn);
  }


function nyelekJenis($v, $d)
{
    if ($v == $d) {
        return 'selected';
    }

    return '';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="back">
  <?php
  $sql = "SELECT * FROM buku WHERE id = $id LIMIT 1";
  $result = mysqli_query($conn, $sql);
  $v = mysqli_fetch_assoc($result);
  ?>
  <div class="content">
    <div class="back-arrow">
      <a href="/buku.php">Kembali</a>
    </div>
    <form method="post">
      <div class="judul">
        <h1>Edit Daftar Produk</h1>
        <p>Silahkan edit detail buku</p>
      </div>
      <div>
        <input type="hidden" name="id" value="<?php echo $v["id"]; ?>">
      </div>
      <div>
        <label>Nama buku</label>
        <input type="text" name="nama_buku" value="<?php echo $v["nama_buku"]; ?>">
      </div>
      <div>
        <label>Penulis</label>
        <input type="text" name="penulis" value="<?php echo $v["penulis"]; ?>">
      </div>
      <div>
        <label>Penerbit</label>
        <input type="text" name="penerbit" value="<?php echo $v["penerbit"]; ?>">
      </div>
      <div>
        <label>Tahun Terbit</label>
        <input type="text" name="tahun_terbit" value="<?php echo $v["tahun_terbit"]; ?>">
      </div>
      <div>
        <label>Jenis Buku</label>
        <select name="jenis_buku">
                    <option value="Novel">Novel</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Dongeng">Dongeng</option>
                    <option value="Legenda">Legenda</option>
                </select>
      </div>
      <div>
        <input type="submit" name="submit" value="Simpan">
      </div>
    </form>
  </div>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Riwayat Buku</title>
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
    <h1>Edit Riwayat Buku</h1>
    <a href="/buku.php">Kembali ke Buku</a>
    <div class="content">

        <form action="buku-store.php" method="post">
            
            <div>
                <label>Jenis</label>
                <select name="jenis_buku">
                    <option <?= nyelekJenis("Novel", $p['jenis_buku']) ?> value="Novel">Novel</option>
                    <option <?= nyelekJenis("Fiksi", $p['jenis_buku']) ?> value="Fiksi">Fiksi</option>
                    <option <?= nyelekJenis("Dongeng", $p['jenis_buku']) ?> value="Dongeng">Dongeng</option>
                    <option <?= nyelekJenis("Legenda", $p['jenis_buku']) ?> value="Legenda">Legenda</option>
                </select>
            </div>
            <div>
                <label>Nama Buku</label>
                <input type="text" name="nama_buku" value="<?= $p['nama_buku'] ?>">
            </div>
            <div>
                <label>Penulis</label>
                <input type="text" name="penulis" value="<?= $p['penulis'] ?>">
            </div>
            <div>
                <label>Penerbit</label>
                <input type="text" name="penerbit" value="<?= $p['penerbit'] ?>">
            </div>
            <div>
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" value="<?= $p['tahun_terbit'] ?>">
            </div>
            <div style="margin-top: 20px;">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

</body>

</html> -->