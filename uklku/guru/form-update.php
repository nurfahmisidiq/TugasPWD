<?php

include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "SELECT * FROM guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
   <link rel="stylesheet" href="form-create.css">

   <style media="screen">



   </style>
</head>
<body>
  <div id="header">
  <div class="name"><a href='#'><b>UBAH DATA GURU</b></a></div>
  <div class="logout"><a href="../login/logout.php">LogOut</div>
    </div>

    <div class="container">
  <div class="sidebar">
    <ul class="menu">
      <li><a href="../mapel/read.php">Data Mapel</a></li>
      <li><a class="selected" href="read.php">Data Guru</a></li>
      <li><a href="../mapel/form-create.php">Tambah Data Mapel</a></li>
      <li><a  href="form-create.php">Tambah Data Guru</a></li>
    </ul>
  </div>
<div class="form" >
    <form action="update.php" method="post" class="form-container">
    <table>
      <br>
    <p>
         <input type="text" name="nama_guru" id="nama" value="<?php echo $row['nama_guru']; ?> ">
      <br>

         <input type="text" name="jumlah_jam" id="jumlah_jam" value="<?php echo $row['jumlah_jam']; ?>">

      <br>
      <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>">
      <br>
      <input type="text" name="telp" id="telp" value="<?php echo $row['telp']; ?>">
      <br>
      <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
      <br>
         <input type="hidden" name="kode_guru" value="<?php echo $row['kode_guru']; ?>">
         <input type="submit" name="btnSimpan" value="Simpan" >
         </p>

    </table>
    </form>
</body>
</html>
