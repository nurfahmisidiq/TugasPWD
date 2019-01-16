<?php

include '../connect.php';

$query = "SELECT  * FROM matapelajaran";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result)
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
<div class="name"><a href='#'><b>DATA MAPEL</b></a></div>
<div class="logout"><a href="../login/logout.php">LogOut</div>
  </div>

  <div class="container">
<div class="sidebar">
  <ul class="menu">
    <li><a class="selected" href="#">Data Mapel</a></li>
    <li><a href="../guru/read.php">Data Guru</a></li>
    <li><a href="form-create.php">Tambah Data Mapel</a></li>
    <li><a href="../guru/form-create.php">Tambah Data Guru</a></li>
  </ul>
</div>

<div class="content">
      <div class="cari">
      <form action="search.php" method="get">
      <input type="search" name="cari" placeholder="cari" id="src">


  <select name="kategori" id="drop">

  <option value="kode_mapel">Kode mapel</option>
  <option value="nama_guru">Nama mapel</option>
    <option value="alokasi_waktu">Alokasi waktu</option>

  </select>
      <input type="submit" value="Cari&nbsp;&nbsp;">
  </form>
  </div>
  <br>

  <table>
      <tr>
          <th>No</th>
          <th>Kode mapel</th>
          <th>Mata Pelajaran</th>
          <th>Alokasi waktu</th>
          <th>Semester</th>
          <th>Kode guru</th>
          <th colspan="2">Aksi</th>


          <?php

          if($num > 0)
          {
              $no = 1;
              while($data = mysqli_fetch_assoc($result)){ ?>

                <tr>
                <td> <?php echo $no; ?></td>
                <td> <?php echo $data ['kode_mapel']; ?></td>
                <td> <?php echo $data ['mapel']; ?></td>
                <td> <?php echo $data ['alokasi_waktu']; ?></td>
                <td> <?php echo $data ['semester']; ?></td>
                <td>
                    <?php
                           if($data['kode_guru'] != NULL)
                           { echo $data['kode_guru'];}
                           else{ echo "-";}
                       ?>


                </td>
                <td> <a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel']; ?>" id="edit" >Edit </a> </td>
                <td><a id="hapus" href="delete.php?kode_mapel=<?php echo $data ['kode_mapel'];  ?>"onclick="return confirm('Anda Yakin ingin menghapus data?')">Hapus</a></td>
                </tr>

                <?php
                $no++;

              }

          }

          else
          {
              echo "<tr> <td colspan='5'>Tidak ada data </td></tr>";
          }

          ?>
      </tr>
  </table>


</div>
  </div>


  </body>
</html>

























<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/read.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body onload="myFunction()">
<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
<div id="sideNavigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; </a>
  <a href="form-create.php">Tambah Data</a
  <a href="../guru/read.php">Data Guru</a>
  <a href="../login/logout.php">Log out</a>
</div>

<nav class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
</nav>
        <h2>Mata Pelajaran</h2>

<form action="search.php" method="get" class="cari">
<input type="search" name="cari" placeholder="cari" id="src">

<select name="kategori" id="drop">

<option value="kode_mapel">Kode Mapel</option>
<option value="mapel">Nama Mapel</option>
<option value="alokasi_waktu">Alokasi Waktu</option>

</select>
<input type="submit" value="Cari&nbsp;">

</form>
<br>
<a href="form-create.php" id="plus">[+] Tambah Data</a>
<br>
<br>
      <table>
          <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Mata Pelajaran</th>
              <th>Alokasi waktu</th>
              <th>Semester</th>
              <th>Guru Pengajar</th>
              <th colspan="2">Aksi</th>


              <?php

              if($num > 0)
              {
                  $no = 1;
                  while($data = mysqli_fetch_assoc($result)){ ?>

                    <tr>
                    <td> <?php echo $no; ?></td>
                    <td> <?php echo $data ['kode_mapel']; ?></td>
                    <td> <?php echo $data ['mapel']; ?></td>
                    <td> <?php echo $data ['alokasi_waktu']; ?></td>
                    <td> <?php echo $data ['semester']; ?></td>
                    <td>
                        <?php
                               if($data['nama_guru'] != NULL)
                               { echo $data['nama_guru'];}
                               else{ echo "-";}
                           ?>
                    </td>
                    <td> <a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel']; ?>" id="edit" >Edit </a> </td>
                    <td><a id="hapus" href="delete.php?kode_mapel=<?php echo $data ['kode_mapel'];  ?>"onclick="return confirm('Anda Yakin ingin menghapus data?')">Hapus</a></td>
                    </tr>

                    <?php
                    $no++;

                  }

              }

              else
              {
                  echo "<tr> <td colspan='5'>Tidak ada data </td></tr>";
              }

              ?>
          </tr>
      </table>

    </form>

</div>
</body>
</html>
