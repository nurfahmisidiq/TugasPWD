<?php

include '../connect.php';

$query = "SELECT * FROM matapelajaran";
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
       <h2>DATA MATAPELAJARAN</h2>
       <tr>
         <th>No</th>
         <th>Kode mapel</th>
         <th>Mapel</th>
         <th>Alokasi waktu</th>
         <th>Semester</th>
         <th>Kode guru</th>
       </tr>
       <?php
       if ($num >0)
        {
         $no = 1;
         while ($data = mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>". $no . "</td>";
           echo "<td>". $data['kode_mapel'] . "</td>";
           echo "<td>" . $data['mapel'] . "</td>";
           echo "<td>" . $data['alokasi_waktu']. "</td>";
           echo "<td>" . $data['semester']. "</td>";
           echo "<td>" . $data['kode_guru']. "</td>";
           echo "<td><a herf='form-update.php?kode_mapel=" . data[kode_mapel] . " '>Edit</a> | ";
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
