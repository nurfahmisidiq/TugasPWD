<?php

include '../connect.php';

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];

$query = "UPDATE guru SET nama_guru = '$nama_guru',
                          jumlah_jam = '$jumlah_jam' Where kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if ($num > 0) {
  echo "Berhasil update data <br>";
}

else {
  echo "Gagal update data <br>";
}

echo "<a href ='read.php'>Lihat Data</a>";

 ?>
