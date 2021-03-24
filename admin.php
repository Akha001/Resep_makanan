<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<html>
<head>
	<link rel="icon" href="img/pic3.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
		<title>Akha resep</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="menu">
		<ul>
		<div align='center'>
			<h1>Selamat Datang Admin,<br> [<b><?php echo $username;?></b>]</h1>
		</div>
		<br>
			<li><a href="admin.php">Home</a></li>
			<li><a href="cv/indexa.php">About me</a></li>
			<li><a href="logout.php"><b>Logout</b></a></li>
		</ul>
	</div>
	<section class="banner">
		<header>
			<h2 class="logo">Recipe</h2>
			<div class="toggle" onclick="toggleMenu();"></div>
		</header>
			<video src="food.mp4" muted loop autoplay></video>
				<div class="overlay"></div>
					<div class="text">
						
						<h2> Ingin Memasak apa hari ini?</h2>
						<p> Apakah kalian ingin belajar memasak tapi tidak tahu ingin memasak apa?
							cobalah terlebih dahulu melihat website ini,
							mungkin website ini bisa membantu anda memasak sesuatu hari ini!
						</p>
						<a href="tabel.php">Lets try it!</a>
					</div>
				<ul class="sc">
					<li><a href="https://www.facebook.com/sakha.perdana.3"><img src="icon/facebook.png"></a></li>
					<li><a href="https://www.instagram.com/akha.lakaus/"><img src="icon/instagram.png"></a></li>
				</ul>
		</div>
	</section>
	<script type="text/javascript">
		function toggleMenu(){
			var menuToggle = document.querySelector('.toggle');
			var banner = document.querySelector('.banner');
			menuToggle.classList.toggle('active');
			banner.classList.toggle('active');
			}
	</script>
</body>
</html>