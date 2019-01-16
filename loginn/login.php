<?php 
include 'koneksi.php';
 
$username = $_POST['sidiq'];
$password = $_POST['sidiq'];
 
$query = mysql_query("select * from admin where username='$sidiq' and password='$sidiq'");
$cek = mysql_num_rows($query);
echo $cek;
?>