<?php

include '../connect.php';
$query = "SELECT kode, nama_matkul,sks, semester, nama_dosen
          FROM matakuliah LEFT JOIN dosen
          USING (id_dosen)
          ORDER BY kode";

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
  background-color: GREY;
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
 .search{
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
  padding-top: 10px;
 }
 #sidebar a{
  text-decoration: none;
  margin: 0px;
  background-color: rgb(0, 0, 0, 0.20);
  padding: 10px 35px;
  display:grid;
  color: gray;
 }
 #sidebar h1 {
  margin: auto;
  text-align: center;
 }

.tambah {
  text-align: right;
}

 .tambah a {
   color: red;
   /* text-align: right; */
   /* margin-right: 300px; */
 }
 </style>
   </head>
   <body>
     <form class="search" action="search.php" method="get">
       <input type="search" name="cari" placeholder="masukan pencarian...">

       <select
       name="kategori" id="">
         <option value="nama_matkul">Matakuliah</option>
         <option value="nama_dosen"> Dosen </option>
         <option value="sks"> SKS </option>
         <option value="semester"> Semester </option>
    </select>

       <input type="submit" name="" value="cari">
     </form>
     <table border="0">

       <h1>MATAKULIAH</h1>
       <tr>
         <th>NO.</th>
         <th>Kode</th>
         <th>Matakuliah</th>
         <th>SKS</th>
         <th>Semester </th>
         <th>Dosen Pengajar</th>
         <th>Aksi</th>
       </tr>

<?php
if ($num >0)
{
  $no = 1;
  while ($data = mysqli_fetch_assoc($result))
  {    ?>
<tr>
  <td> <?php echo $no; ?> </td>
  <td> <?php echo $data['kode'] ?> </td>
  <td> <?php echo $data['nama_matkul'] ?> </td>
  <td> <?php echo $data['sks'] ?> </td>
  <td> <?php echo $data['semester'] ?> </td>
  <td> <?php
      if ($data['nama_dosen'] != NULL)
       {
        echo $data['nama_dosen'];
      }
      else
      {
      echo "-";
      }
      ?>
 </td>
  <td> <a href="form-update.php?kode=<?php echo $data['kode']; ?>"> Edit</a>
      <a href="delete.php?kode=<?php echo $data['kode']?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data')"> Hapus </a>
  </td>

</tr>
    <?php

  }

}
else
{
  echo "<tr><td colspan='7'> Tidak Ada Data </td></tr>";
}

 ?>
</table>
<div id="sidebar">
  <h1>SIUNIV</h1>
 <a href="../dosen/read.php"> Dosen </a>
 <hr border = "1">
 <a href="../matakuliah/read.php"> Matakuliah</a>
 <hr border="1">
 <a href="#"> Rencana Logout
 <hr border="1">
</div>
<div class="tambah">
<a href="form-create.php">Tambah Data</a>
 <!-- <hr border="1"> -->
</div>
</body>
</html>
