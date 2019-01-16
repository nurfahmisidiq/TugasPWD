<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <div class="Loginbox">
      <img src="user.png" class="user">
      <h2>LogIn</h2>
      <form  action="login.php" method="post">
        <p>Username</p>
        <input type="text" name="username" placeholder="username">
        <p>Password</p>
        <input type="password" name="password" placeholder="******"><br>
        <input type="submit" name="Login" value="Login">
        <br>
        <a href="#">forget password</a>
      </form>
    </div>
  </body>
</html>
