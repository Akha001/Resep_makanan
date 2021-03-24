<?php
  
include 'koneksi.php';

  
  if (isset($_GET['id'])) {
    
    $id = ($_GET["id"]);

    
    $query = "SELECT * FROM menu WHERE id='$id'";
    $result = mysqli_query($db, $query);
    
    if(!$result){
      die ("Query Error: ".mysqli_errno($db).
         " - ".mysqli_error($db));
    }
    
    $data = mysqli_fetch_assoc($result);
      
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='indexm.php';</script>";
       }
  } else {
    
    echo "<script>alert('Masukkan data id.');window.location='indexm.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
	<link rel="icon" href="img/pic3.jpg">
    <title>CRUD Menu dengan gambar - Gilacoding</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 550px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
	 a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body background="img/original.jpg">
      <center>
        <h1>Edit Produk <?php echo $data['nama_makanan']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Menu</label>
          <input type="text" name="nama" value="<?php echo $data['nama_makanan']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         
		  <textarea input type="text" class="ckeditor" name="deskripsi" id="ckedtor"><?php echo $data['deskripsi']; ?></textarea>
        </div>
       
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
		 <button type="submit"><a href="indexm.php">Cancel</a></button>
        </div>
        </section>
      </form>
  </body>
</html>