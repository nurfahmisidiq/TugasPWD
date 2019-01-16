<?php

include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "SELECT * FROM guru where kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form action="update.php" method="post">
       <table>
         <tr>
           <td><label for="nama">Nama Guru</label></td>
           <td>:</td>
           <td><input type="text" name="nama_guru" id="nama" value="<?php echo $row['nama_guru']; ?>"></td>
         </tr>
         <tr>
           <td><label for="nama">Jumlah Jam</label></td>
           <td>:</td>
           <td><input type="number" name="jumlah_jam" id="jam"></td>
         </tr>
         <tr>
           <td></td>
           <td><input type="hidden" name="kode_guru"</td>
           <td><input type="submit" value="Simpan" name="btnSimpan"</td>
         </tr>
       </table>
     </form>
   </body>
 </html>
