<?php
$host = "localhost";
$db = "db_manajemen_sekolah";
$uname = "root";
$pass = "";
$connect = mysqli_connect($host,$uname,$pass,$db);
if(!$connect)
{
  echo "Koneksi Ke database gagal : " . mysqli_connect_error();
}
 ?>
