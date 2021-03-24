<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $name = $_POST['name'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM login WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong!?pesan=gagal></div>";
	   header("location:daftar.php?pesan=gagal");
     } else {
       $data = "INSERT INTO login VALUES ('$username','$pass','$name','user')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses!?pesan=sukses></div>";
		 header("location:daftar.php?pesan=sukses");
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>