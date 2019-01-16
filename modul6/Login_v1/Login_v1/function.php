<?php
session_start();
include "../connect.php";

$nis = $_POST['nis'];
$password = $_POST['password'];
if ($nis == "" ||$password == "") {
  header("location: index.html");
}
else
{
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if ($num == 1) {
    header("location: add_data.php")
  }
  else {
    echo "<script>
    alert('Login Gagal') </script>";
include "index.html";
  }
}
  

 ?>
