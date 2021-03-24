<?php
  include('koneksi.php'); 
  
?>
<!DOCTYPE html>
<html>
  <head>
	<link rel="icon" href="img/pic3.jpg">
    <title>Tambah Menu</title>
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
      width: 780px;
      height: auto;
      padding: 20px;
	  margin-top: 30px;
      margin-left: auto;
      margin-right: auto;
      background: url('img/3.png');
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
        <h1>Tambah Menu Makanan</h1>
		<center><a href="indexm.php">+ &nbsp; Lihat Data Masakan</a>
      <center>
	 
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Makanan</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <textarea class="ckeditor" name="deskripsi" id="ckedtor"></textarea>
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan</button>
         <button type="submit"><a href="tabel.php">Cancel</a></button>
        </div>
        </section>
      </form>
  </body>
</html>