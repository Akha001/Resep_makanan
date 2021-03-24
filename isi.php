<html>
<link rel="icon" href="img/pic3.jpg">
<head><title>table</title>
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
      width: 100%;
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
        height: 100%;
        overflow: auto;
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
</head>
<body>
	<div class="container">
			<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none" id="mySidebar">
				<button class="w3-bar-item w3-button w3-large"
					onclick="w3_close()">Close &times;</button>
				<a href="isi.php" class="w3-bar-item w3-button w3-hover-red">Home</a>
				<a href="user.php" class="w3-bar-item w3-button w3-hover-grey">Back</a>
			</div>
			
				<div class="w3-bar w3-theme">
					<span><button class="w3-button w3-white w3-xlarge" onclick="w3_open()">&#9776;</button><font size=5> RECEPIS</font></span>	
				</div>
			
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
			
	<table>	
	<thead>
        <tr>
          <th>Nama Masakan</th>
          <th>Dekripsi</th>
          <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
	
	
      <?php
       include('koneksi.php');
	  
	   $halaman = 4; /* page halaman*/
                $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
				
				$query = "SELECT * FROM menu ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);
      
      if(!$result){
        die ("Query Error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      $tampilMas = mysqli_query($db, "SELECT * FROM menu LIMIT $mulai, $halaman");
      $no = 1; 
      
      while($row = mysqli_fetch_array($tampilMas))
      {
		?>

 
       <tr>
	<td><?php echo $row['nama_makanan']; ?></td>
        <td>Klik Detail untuk melihat bahan...</br>
		<input type="button" name="view" value="Detail" data-id="<?php echo $row['id']; ?>" class="btn btn-info btn-xs view_data"></td>
        <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
      </tr>
   
      <?php
        $no++; 
      }
      ?>

    </tbody>
	</table>
			  <br />
    <div style="font-weight:bold; text-align:center;">
     
        <?php
            for ($i=1; $i<=$pages ; $i++){
        ?>
            <a href="isi.php?halaman=<?php echo $i; ?>" style="text-decoration:none;">   <u><?php echo $i; ?></u></a>
        <?php
            }
        ?>
    </div>
	
			<footer class="w3-bar w3-black w3-center w3-xlarge ">
				<center><p>Powered by @<a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-aqua">Kurnia Bintang Sakha Perdana</a></p></center>
			</footer>	
		</div>		
		
		<div id="dataModal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title">Detail </h4> 
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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