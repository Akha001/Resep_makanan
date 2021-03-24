<?php
include 'koneksi.php';
$id = $_GET["id"];


    $query = "DELETE FROM menu WHERE id='$id' ";
    $hasil_query = mysqli_query($db, $query);

    
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($db).
       " - ".mysqli_error($db));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='indexm.php';</script>";
    }