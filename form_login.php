<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<?php
if(isset($_GET["login_error"])){
  echo "username atau password salah</h2>";
}

?>

<h1>LOGIN</h1>
<form method="post" action="ceklogin.php">
  <p><input type="text" name="usernsme" value=""
placeholder="username or email"></p>

<p>
<input type="password" name="password" value=""
placeholder="password"></p>

<p class="submit"><input type="submit" name="commit"
value="login"></p>

</form>

</body>
</html>             