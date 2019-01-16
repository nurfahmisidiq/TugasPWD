<?php

include '../connect.php';

session_start();

if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT * FROM matapelajaran WHERE $kategori LIKE '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matapelajaran</title>

<style media="screen">

.judul{
position: fixed;
margin-left: 500px;
margin-top: 25px;
font-size: 20px;
}

.form{
position: fixed;
margin-left: 400px;
margin-top:150px;
}

.table{
position: fixed;
margin-left: 250px;
margin-top: 225px;
font-size: 24px;

}

.kembali{
  position: fixed;
  margin-left: 500px;
  margin-top: 160px;

}

</style>




</head>
<body>
  <div class="judul">
    <H2>Mata Pelajaran</H2>
  </div>
<div class="form">
  <form action="search.php" method="get">
      <input type="search" name="cari" placeholder="Masukkan pencarian...">
      <select name="kategori" id="">
          <option value="mapel">Mapel</option>
          <option value="alokasi_waktu">Alokasi Waktu</option>
          <option value="semester">Semester</option>
      </select>
      <input type="submit" value="Cari">
  </form>
</div>


<div class="table">
  <table border="1">
      <tr>
          <th>Kode Mapel</th>
          <th>Matapelajaran</th>
          <th>Alokasi Waktu</th>
          <th>Semester</th>
          <th>Kode_guru</th>
      </tr>
  <?php
      if($num > 0)
      {
          while ($data = mysqli_fetch_assoc($result)) { ?>

              <tr>
                  <td> <?php echo $data['kode_mapel'] ?> </td>
                  <td> <?php echo $data['mapel'] ?> </td>
                  <td> <?php echo $data['alokasi_waktu'] ?> </td>
                  <td> <?php echo $data['semester'] ?> </td>
                    <td> <?php echo $data['kode_guru'] ?> </td>
          <?php
          }
      }
      else
      {
          echo "<tr> <td colspan='5'> Tidak ada data </td></tr>";
      }
  ?>
</tr>
</table>
</div>


    <br>
    <div class="kembali">
      <table>
          <a href="read.php">Kembali lagi</a>
      </table>
    </div>

</body>
</html>
