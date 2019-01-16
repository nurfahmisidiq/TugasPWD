<?php

include '../connect.php';

$query = "SELECT * FROM guru";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table border='1'>
       <h2>DATA GURU</h2>
       <tr>
         <th>No</th>
         <th>Kode guru</th>
         <th>Nama guru</th>
         <th>Aksi</th>
<th>Jumlah jam</th>
<th>Alamat</th>
<th>Telp</th>
<th>Email</th>
       </tr>
       <?php
       if ($num >0)
        {
         $no = 1;
         while ($data = mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>". $no . "</td>";
           echo "<td>". $data['kode_guru'] . "</td>";
           echo "<td>" . $data['nama_guru'] . "</td>";
           echo "<td>" . $data['jumlah_jam']. "</td>";
           echo "<td>" . $data['alamat']. "</td>";
           echo "<td>" . $data['telp']. "</td>";
           echo "<td>" . $data['email']. "</td>";
              echo "<td><a herf='form-update.php?kode_guru=" . data[kode_guru] . " '>Edit</a> | ";
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
