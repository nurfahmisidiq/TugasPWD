<?php

ob_start();
session_start();
ob_end_clean();
if(isset($_SESSION["username"])){
    echo"Berhasil";
    echo "<a herf='log_out.php'>logout</a>";
}else{
    echo header ("location:form_login.php");
}

?>