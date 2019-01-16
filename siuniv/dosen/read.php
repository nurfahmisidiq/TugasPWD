<?php
session_start();
if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form-login.php");
}
include '../connect.php';
$query = "SELECT * FROM dosen";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     th {
  background-color: grey;
  color: white;
}
tr:hover {background-color: #2F4F4F;}
th, td {
    padding: 20px;
    text-align: left;
}
body{
 margin: 10px 250px;

}
#sidebar{
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top : 0;
  left: 0;
  background-color: rgb(0, 0, 0, 0.10);
  padding-top: 20px;
}
#sidebar a{
  text-decoration: none;
  margin: 0px;
  background-color: rgb(0,0,0,0.20);
  padding: 10px 35px;
  display:grid;
  color: grey;
}
#sidebar h1 {
  margin: auto;
  text-align: center;
}
.search{
  margin: 10px;
}

     </style>
   </head>
   <body>

     <form class="search" action="search.php" method="get">
       <input type="search" name="cari" placeholder="Masukan pencarian...">
       <input type="submit" value="Cari">
     </form>
     <table border = '0'>
       <h1> Data Dosen</h1>
       <tr>
         <th>No.</th>
         <th>Nama Dosen</th>
         <th>Telepon</th>
         <th>Aksi</th>
       </tr>
       <?php
if ($num >0)
 {
  $no = 1;
  while ($data = mysqli_fetch_assoc($result))
  {
    echo "<tr>";
    echo "<td>". $no . "</td>";
    echo "<td>" . $data['nama_dosen'] . "</td>";
    echo "<td>" . $data['telp']. "</td>";
    echo "<td><a href ='form-update.php?id_dosen=". $data['id_dosen']. "'>Edit</a> | ";
    echo "<a href ='delete.php?id_dosen=". $data['id_dosen']."' onclick='return confirm(\"Apakah Anda Yakin ingin menghapus data?\")'>Hapus</a> </td> ";
    echo "</tr>";
    $no ++;
  }
}
else {
  echo "<td colspan = '3'> Tidak ada data </td>";
}
        ?>
     </table>
<div id="sidebar">
  <h1>SIUNIV</h1>
 <a href="../dosen/read.php"> Dosen </a>
 <hr border = "1">
 <a href="../matakuliah/read.php"> Matakuliah</a>
 <hr border="1">
 <a href="#"> Link 3</a>
 <hr border="1">
</div>
   </body>
 </html>
