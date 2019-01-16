<?php



include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$sort = $_GET['sort'];
$query = "SELECT * FROM guru WHERE $kategori LIKE '%$cari%' ORDER BY $sort";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="read.css">
  </head>
  <body>

<div id="header">
<div class="name"><a href='#'><b>DATA GURU</b></a></div>
<div class="logout"><a href="../login/logout.php">LogOut</div>
  </div>

  <div class="container">
<div class="sidebar">
  <ul class="menu">
    <li><a href="../mapel/read.php">Data Mapel</a></li>
    <li><a class="selected" href="#">Data Guru</a></li>
    <li><a href="../mapel/form-create.php">Tambah Data Mapel</a></li>
    <li><a href="form-create.php">Tambah Data Guru</a></li>
  </ul>
</div>

<div class="content">
      <div class="cari">
      <form action="search.php" method="get">
      <input type="search" name="cari" placeholder="cari" id="src">

  <select name="kategori" id="drop">

  <option value="nama_guru">Nama Guru</option>
  <option value="kode_guru">Kode Guru</option>

  </select>
  <label for="">sort</label>
  <select name="sort" id="drop">

  <option value="nama_guru">Nama Guru</option>
  <option value="kode_guru">Kode Guru</option>

</select>


  </select>
      <input type="submit" value="Cari&nbsp;&nbsp;">
      <input class="tombol" type="button" value="tambah data" onclick="window.location.herf='form-create.php'"/>
  </form>
  </div>
  <br>

  <table class="table">
    <tr>
          <th>Kode Guru</th>
          <th>Nama Guru</th>
          <th>mapel</th>
          <th>Jurusan</th>
          <th>kelas</th>
          <th>Jumlah jam</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>email</th>
          <th colspan='2'>Aksi</th>
    </tr>

    <?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
        echo "<tr>";
        echo "<td align='center'>" .$data['kode_guru']. "</td>";
        echo "<td>" . $data ['nama_guru']. "</td>";
        echo "<td align='center'>" .$data['mapel']. "</td>";
        echo "<td align='center'>" .$data['jurusan']. "</td>";
        echo "<td align='center'>" .$data['kelas']. "</td>";
        echo "<td>" .  $data ['jumlah_jam'] . "</td>";
        echo "<td>" .  $data ['alamat'] . "</td>";
        echo "<td>" .  $data ['telp'] . "</td>";
        echo "<td>" .  $data ['email'] . "</td>";
        echo "<td><a id='edit' href ='form-update.php?kode_guru=".$data['kode_guru']."'> Edit</a>  ";
        echo "<td><a id='hapus' href ='delete.php?kode_guru=".$data['kode_guru']."'onclick='return confirm(\"Apakah anda yakin akan menhapus data\")'>Hapus</a>  ";
        echo "</tr>";

        $no++;
        }
    }
    else
    {
        echo "<td colspan = '3'>Tidak ada data </td>";

    }
    ?>

    </table>
</div>
  </div>


  </body>
</html>




    <?php
    if($num > 0)
    {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        {
        echo "<tr>";
        echo "<td>". $data ['kode_guru'] . "</td>";
        echo "<td>" . $data ['nama_guru']. "</td>";
        echo "<td>" .  $data ['jumlah_jam'] . "</td>";
        echo "<td>" .  $data ['alamat'] . "</td>";
        echo "<td>" .  $data ['telp'] . "</td>";
        echo "<td>" .  $data ['email'] . "</td>";
        echo "<td><a id='edit' href ='form-update.php?kode_guru=".$data['kode_guru']."'> Edit</a>  ";
        echo "<td><a id='hapus' href ='delete.php?kode_guru=".$data['kode_guru']."'onclick='return confirm(\"Apakah anda yakin akan menhapus data\")'>Hapus</a>  ";
        echo "</tr>";

        $no++;
        }
    }
    else
    {
        echo "<td colspan = '3'>Tidak ada data </td>";

    }
    ?>

    </table>
    <br>
    <script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</div>
</body>
</html>
