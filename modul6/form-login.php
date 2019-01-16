<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="kelas">

  </div>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>Username dan Password salah</h3>';
        }
    }
    ?>
    <Form action="login.php" method="post">
        NIS: <input type="text" name="nis"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="LOGIN">
    </Form>
</body>
</html>
