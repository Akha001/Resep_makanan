<?php  
include ('koneksi.php');
if(isset($_POST['data_id'])){
	$data_id = $_POST['data_id'];
	$output = "";
	$query = "SELECT * FROM menu WHERE id = '$data_id' ";  
	$result = mysqli_query($db, $query); 
	$output .= '
	
<div class="table-responsive">  
	<table class="table table-bordered">'; 
	$row = mysqli_fetch_array($result);
     $output .= '  
          <tr>  
               <td>'.$row["deskripsi"].'</td>  
          </tr>
          ';    
$output .= "
	</table>
</div>";  
echo $output ;  
}

?>