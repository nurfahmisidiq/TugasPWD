<?php
include '../connect.php';
$cari = $_GET['cari'];
$query = "SELECT * FROM dosen WHERE nama_dosen LIKE '%$cari%'";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     th {
  background-color: #4CAF50;
  color: white;
 }
 tr:hover {background-color: #4CAF50;}
 th, td {
    padding: 20px;
    text-align: left;
 }
 body{
 margin: 5px 250px;

 }
</style>
   </head>
 <body>
   <form action="search.php" method="get">
     <input type="search" name="cari" placeholder="Masukan pencarian...">
     <input type="submit" value="Cari">
   </form>
   <table border = '0'>
     <h2> Data Dosen</h2>
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

 </body>
</html>
