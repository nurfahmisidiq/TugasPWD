<?php

include '../connect.php';

session_start();

if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}

$kode_mapel = $_GET['kode_mapel'];

$query = "DELETE FROM matapelajaran WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

header("Location:read.php");

?>
