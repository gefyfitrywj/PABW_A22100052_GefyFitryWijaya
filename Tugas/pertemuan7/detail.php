<?php
require 'functions.php';

//ambil ida dari URL
$id = $_GET['id'];
$m =  query("SELECT *FROM mahasiswa WHERE id =$id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Daftar Harga</h3>
  <ul>
    <li><img src="img/<?= $m['Gambar']; ?>" widht="500"></li>
    <li>NIM : <?= $m['NIM']; ?></li>
    <li>Nama : <?= $m['Nama']; ?></li>
    <li> <a href="">Ubah</a> | <a href="">Hapus</a> </li>
    <li> <a href="latihan3.php">Kembali ke daftar mahasiswa</a> </li>
    </li>
  </ul>
</body>

</html>