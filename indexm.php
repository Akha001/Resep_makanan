<?php
  include('koneksi.php');
  
?>

<html>
  <head>
	<link rel="icon" href="img/pic3.jpg">
    <title>Crud Menu</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
		word-spacing: 5px;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body background="">
    <center><h1>Menu Makanan</h1><center>
    <center><a href="tambah.php">+ &nbsp; Tambah Data Menu</a>
			<a href="tabel.php">- &nbsp; Kembali</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Makanan</th>
          <th>Dekripsi</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      
      $query = "SELECT * FROM menu ORDER BY id DESC";
      $result = mysqli_query($db, $query);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      
      $no = 1; 
      
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_makanan']; ?></td>
           <td>Klik Detail untuk melihat bahan...</br>
		<input type="button" name="view" value="Detail" data-id="<?php echo $row['id']; ?>" class="btn btn-info btn-xs view_data"></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
          <td align= center>
              <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> 
			  <p>
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
	
	<div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail </h4>  
              </div>  
              <div class="modal-body" id="detail">  
              </div>  
              
         </div>  
    </div>  
</div> 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('.view_data').click(function(){
		var data_id = $(this).data("id")
		$.ajax({
			url: "detail.php",
			method: "POST",
			data: {data_id: data_id},
			success: function(data){
				$("#detail").html(data)
				$("#dataModal").modal('show')
			}
		})
	})
})
</script>
  </body>
</html>