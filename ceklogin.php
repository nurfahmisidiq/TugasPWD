<?php

ob_start();
session_start();
ob_end_clean();

$username=$_POST["username"];
$password=$_POST["password"];

if ($username=="a" AND $password=="1")
 {
    $_SESSION["username"]=$username;
    header("location:index.php");
}else{
    header("location:form_login.php?login_error");
}
?>