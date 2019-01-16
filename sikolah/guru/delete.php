<?php
error_reporting(0);
include '../connect.php';

$kode_guru = $_GET[kode_guru];

$query = "DELETE FROM guru where kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);


if ($num > 0) {
  echo "Berhasil hapus data <br>";
}

else {
  echo "Gagal hapus data<br>";
}

echo "<a href='read.php'>Lihat Data</a>";
 ?>
