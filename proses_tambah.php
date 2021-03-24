<link rel="icon" href="img/pic3.jpg">
<?php

include 'koneksi.php';

	
  $nama        = $_POST['nama'];
  $deskripsi   = $_POST['deskripsi'];
  $gambar      = $_FILES['gambar']['name'];



if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                  
                  $query = "INSERT INTO menu (nama_makanan, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$nama_gambar_baru')";
                  $result = mysqli_query($db, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='indexm.php';</script>";
                  }

            } else {     
             
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
            }
} else {
   $query = "INSERT INTO menu (nama_makanan, deskripsi, gambar) VALUES ('$nama', '$deskripsi', null)";
                  $result = mysqli_query($db, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($db).
                           " - ".mysqli_error($db));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='indexm.php';</script>";
                  }
}		