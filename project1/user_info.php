<?php
include'connection.php';
$con = mysqli_connect("localhost", "root", "","user");


 function userdata()
 {
  global $con;
  $query="SELECT * FROM users_info";
  $run=mysqli_query($con, $query);
  if($run == TRUE){
    ?>
  <table class="table table-bordered">
    
  <p class="h4 mb-4">User Information</p>
      
  <thead>
    <tr>
      <th scope="col">SI</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col" style="width: 250px">Action</th>
    </tr>
  </thead>
  <?php
    while ($data= mysqli_fetch_assoc($run)){
   ?>

  <tr>
      <td><?php echo $data['ID']; ?></td>
      <td><?php echo $data['first_name']; ?></td>
        <td><?php echo $data['last_name']; ?></td>
          <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td>
              <a href="<?php $base_url;?>view.php?id=<?php echo $data['ID']; ?>" class="btn btn-info">View</a>
               <a href="<?php $base_url;?>edit.php?id=<?php echo $data['ID']; ?>" class="btn btn-primary">Edit</a>
                <a href="<?php $base_url;?>delete.php?id=<?php echo $data['ID']; ?>" class="btn btn-danger">Delete</a>
      </td>
          </tr>
   <?php
}?>
</table> <?php

}
  else{
    echo "error";
  }

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View User_info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
<?php userdata(); ?>

</div>
</body>
</html>
