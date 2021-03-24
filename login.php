<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin.php'); }
   require_once("koneksi.php");
?>

<link rel="icon" href="img/pic3.jpg" link rel="stylesheet" type="text/css" href="alert.css">
<style>
	body{
		font-family: sans-serif;
                background-image: url("img/5.svg");
	}
        table, td {
		width: 250px;
		padding: 10px;
		margin-top: 110px;
		margin-bottom: 120px;
		margin-right: 80px;
		margin-left: 80px;
		box-sizing: border-box;
		background: linear-gradient(to left, orange, magenta);
		border-radius: 5%;
	}
	.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
</style>
<title>Form Login</title>
<body background="img/5.png">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<center><div class='alert'>Username dan Password tidak sesuai !</div></center>";
		}
	}
	?>

<div align='center'>
  <form action="proses.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Masuk</h1></td></tr>
  <tr><td>Username:</td><td>  <input name="username" type="text"></td></tr>
  <tr><td>Password:</td><td>  <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a> <br/><a class="link" href="login.php">Coba Lagi</a></td></tr>
  </tbody>
  </table>
  </form>
</div>		