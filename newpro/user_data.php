<?php 
 include'connection.php';
 $con=mysqli_connect("localhost","root","","user");

 function userdata(){

 	global $con;
      
      $query="SELECT * FROM users";                               
 	$run=mysqli_query($con, $query);
 	if($run == TRUE){
 		?>
      <table class="table table-bordered"> 
      	  <h3 style=color:#FF1493;>All User Information</h3>
      	<thead>
      		<tr>
      			<th scope="col" style=color:#228B22;>Serial No</th>
      			<th scope="col" style=color:#228B22;>Name</th>
      			<th scope="col" style=color:#228B22;>Email</th>
      			<th scope="col"  style="width: 250px"style=color:#228B22;>Action</th>
            <th scope="col" style=color:#228B22;>Mac Address</th>

      		</tr>
      	</thead>

      	<?php 
          while($data=mysqli_fetch_assoc($run)) {
          	?>         
      		<tr>
      			<td> <?php echo $data['id']; ?></td>
      			<td> <?php echo $data['name']; ?></td>
      			<td> <?php echo $data['email']; ?> </td>
      			<td>
      			<a href=""class="btn btn-info">View</a>
      			<!-- <a href="<?php $base_url;?>view.php?id=<?php echo $data['ID']; ?>" class="btn btn-info">View</a> -->
      			<a href="" class="btn btn-warning">Edit</a>
      			<a href="" class="btn btn-danger">Delete</a>
      		</td>
          <!-- Show mac Address -->
        <td> <?php 
         $string=exec('getmac');
        $mac=substr($string, 0, 17); 
              echo $mac;
            ?> 
              </td>

      		</tr>
      		<?php 
      		}
      			?>
            </table> <?php
        }
        else
        {
        	echo "Error";
        }

 	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> user data</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
     <div class="container">
	 <div align="Center">
		<?php userdata();?>
	</div>

	</div>
  
 </body>
 </html>