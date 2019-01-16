<?php

include  '../connect.php';

$query = "SELECT id_dosen,nama_dosen FROM dosen";
$result = mysqli_query($connect,$query);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="create.php" method="post">
       <p>
         <label for="kode"> Kode : </label>
         <input type="text" name="kode" value="">
       </p>
       <p>
         <label for="matkul"> Matakuliah  : </label>
         <input type="text" name="nama_matkul" value="">
       </p>
       <p>
         <label for="sks"> SKS  : </label>
         <input type="text" name="sks" value="">
       </p>
       <p>
         <label for="semester"> Semester :</label>
         <input type="text" name="semester" value="">
       </p>
       <p>
         <label for="dosen"> Dosen Pengajar : </label>
         <select name="id_dosen" id="nama_dosen">
          <option value="-"> -- Pilih Salah Satu -- </option>
           <<?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $data['id_dosen']; ?>"> <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
            }
            ?>
         </select>

       </p>
       <p>
         <button type="submit" name="btnSimpan"> Simpan </button>
       </p>
     </form>
   </body>
 </html>
