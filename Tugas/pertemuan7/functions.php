<?php

function koneksi()
{
  return  mysqli_connect('localhost', 'root', '', 'db_pabwp7');
}

function query($query)

{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['Nama']);
  $nim = htmlspecialchars($data['NIM']);
  $gambar = htmlspecialchars($data['Gambar']);

  $query = "INSERT INTO mahasiswa VALUES
  (null, '$nama', '$nim', '$gambar');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
