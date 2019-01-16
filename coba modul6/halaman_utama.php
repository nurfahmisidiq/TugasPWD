<?
session_start();
if (!isset($_SESSION[‘username’])){
header(“Location:./index.php”);
}
echo”anda sukses login”;
?>