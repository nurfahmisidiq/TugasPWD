<?php
session_start();
include "connect.php";

$nis = $_POST['nis'];
$password = $_POST['password'];

if ($nis == "" || $password == "")
{
  header("location: form-login.php");
}
else
{
  $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if($num == 1)
  {
    echo "<script>
    alert("login Berhasil!")
    </script>";
    echo " <h1>Login Berhasil</a></h1> ";
    echo " <h1><a herf='editprofil.php'>Edit profil</h1>";
    echo " <h1><a herf='logout.php'>Logout!</a></h1> ";
    $_SESSION['nis'] = $nis;
  }
  else
  {
    header("location: form-login.php");
  }
}


?>
