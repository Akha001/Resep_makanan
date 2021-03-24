<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin.php'); }
?>

<title>Form Pendaftaran</title>
<link rel="icon" href="img/pic3.jpg">
<style>
        body{
            background-color: #550f2f;
			background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 1000'%3E%3Cg %3E%3Ccircle fill='%23550f2f' cx='50' cy='0' r='50'/%3E%3Cg fill='%235b3b3a' %3E%3Ccircle cx='0' cy='50' r='50'/%3E%3Ccircle cx='100' cy='50' r='50'/%3E%3C/g%3E%3Ccircle fill='%23615242' cx='50' cy='100' r='50'/%3E%3Cg fill='%2366644a' %3E%3Ccircle cx='0' cy='150' r='50'/%3E%3Ccircle cx='100' cy='150' r='50'/%3E%3C/g%3E%3Ccircle fill='%236b7351' cx='50' cy='200' r='50'/%3E%3Cg fill='%23708058' %3E%3Ccircle cx='0' cy='250' r='50'/%3E%3Ccircle cx='100' cy='250' r='50'/%3E%3C/g%3E%3Ccircle fill='%23748c5e' cx='50' cy='300' r='50'/%3E%3Cg fill='%23799764' %3E%3Ccircle cx='0' cy='350' r='50'/%3E%3Ccircle cx='100' cy='350' r='50'/%3E%3C/g%3E%3Ccircle fill='%237da269' cx='50' cy='400' r='50'/%3E%3Cg fill='%2381ab6e' %3E%3Ccircle cx='0' cy='450' r='50'/%3E%3Ccircle cx='100' cy='450' r='50'/%3E%3C/g%3E%3Ccircle fill='%2385b573' cx='50' cy='500' r='50'/%3E%3Cg fill='%2389bd78' %3E%3Ccircle cx='0' cy='550' r='50'/%3E%3Ccircle cx='100' cy='550' r='50'/%3E%3C/g%3E%3Ccircle fill='%238dc67c' cx='50' cy='600' r='50'/%3E%3Cg fill='%2390ce81' %3E%3Ccircle cx='0' cy='650' r='50'/%3E%3Ccircle cx='100' cy='650' r='50'/%3E%3C/g%3E%3Ccircle fill='%2394d685' cx='50' cy='700' r='50'/%3E%3Cg fill='%2398dd89' %3E%3Ccircle cx='0' cy='750' r='50'/%3E%3Ccircle cx='100' cy='750' r='50'/%3E%3C/g%3E%3Ccircle fill='%239be48d' cx='50' cy='800' r='50'/%3E%3Cg fill='%239eeb91' %3E%3Ccircle cx='0' cy='850' r='50'/%3E%3Ccircle cx='100' cy='850' r='50'/%3E%3C/g%3E%3Ccircle fill='%23a2f295' cx='50' cy='900' r='50'/%3E%3Cg fill='%23a5f998' %3E%3Ccircle cx='0' cy='950' r='50'/%3E%3Ccircle cx='100' cy='950' r='50'/%3E%3C/g%3E%3Ccircle fill='%23a8ff9c' cx='50' cy='1000' r='50'/%3E%3C/g%3E%3C/svg%3E");
			background-attachment: fixed;
			background-size: contain;
        }
	table, td {
  width: 250px;
  padding: 10px;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
  box-sizing: border-box;
  background: linear-gradient(to left, orange, magenta);
  border-radius: 5%;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
    </style>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<center><div class='alert'>Masih ada data yang kosong!</div></center>";
		}elseif($_GET['pesan']=="sukses"){
			echo "<center><div class='alert'>Pendaftaran Sukses,Silakan Klik Login!</div></center>";
	}
	}
	?>
<div align='center'>
  <form action="prosesdaftar.php" method="post">
  <table class="center">
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td>Username:</td>		<td><input name="username" type="text"></td></tr>
  <tr><td>Name:</td>			<td><input name="name" type="text"></td></tr>
  <tr><td>Password:</td>		<td><input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>