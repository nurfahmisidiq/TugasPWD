<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="form-create.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>

  <div id="header">
  <div class="name"><a href='#'><b>TAMBAH DATA GURU</b></a></div>
  <div class="logout"><a href="../login/logout.php">LogOut</div>
    </div>

    <div class="container">
  <div class="sidebar">
    <ul class="menu">
      <li><a href="../mapel/read.php">Data Mapel</a></li>
      <li><a href="read.php">Data Guru</a></li>
      <li><a href="../mapel/form-create.php">Tambah Data Mapel</a></li>
      <li><a class="selected" href="#">Tambah Data Guru</a></li>
    </ul>
  </div>

<div class="form" >
    <form action="create.php" method="post" class="form-container">
    <h2 class="form-header">Tambah Data Guru</h2>
   <p>
       <br>
    <input type="text" class="form-input" name="nama_guru" placeholder="Nama">
   <br>
    <input type="text" class="form-input" name="jumlah_jam"placeholder="Jumlah Jam">
    <br>
    <input type="text" class="form-input" name="alamat"placeholder="Alamat">
    <br>
    <input type="text" class="form-input" name="telp"placeholder="Telepon">
    <br>
    <input type="email" class="form-input" name="email"placeholder="E-Mail">
    <br>
    <input type="submit" value"simpan">
</p>
    </form>
    </div>
</body>
</html>
