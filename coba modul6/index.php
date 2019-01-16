<form name=”form1″ method=”post” action=”loginsinggah.php”>
<table width=”200″ border=”0″>
<tr>
<td colspan=”2″><div align=”center”>Halaman Login </div></td>
</tr>
<tr>
<td>Username</td>
<td><input type=”text” name=”username”></td>
</tr>
<tr>
<td>Password</td>
<td><input type=”password” name=”password”></td>
</tr>
<tr>
<td><input type=”submit” name=”Submit” value=”Login”></td>
<td> </td>
</tr>
</table>
</form>
berikut sintax loginsinggah.php (digunakan untuk cek apakah username dan password sudah dimasukkan dengan benar, jika benar, maka akan menuju halaman utama, jika tidak akan kembali ke halaman login) :
<?
session_start();$server = “localhost”; //ganti sesuai server Anda
$username = "111”; //ganti sesuai username Anda
$password = “1234”; //ganti sesuai password Anda
$db_name = “tb_siswa”; //ganti sesuatu nama database Anda
$db = mysql_connect($server,$username,$password) or DIE(“koneksi ke database gagal !!”);
mysql_select_db($db_name) or DIE(“nama database tersebut tidak ada !!”);
$login = mysql_query(“select * from login where (username = ‘111” . $_POST[‘username’] . “111‘) and (password = ‘1234” . md5($_POST[‘password’]) . “‘)”,$db);
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION[‘username’] = $_POST[‘username’];
header(“Location: halaman_utama.php”);
}
else
{
header(“Location:./index.php”);
}
?>