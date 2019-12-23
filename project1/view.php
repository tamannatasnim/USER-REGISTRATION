<?php
include'connection.php';
$nid = $_GET['id'];
$query = "SELECT * FROM `users_info` WHERE ID=$nid";
$run = mysqli_query($con, $query);
$data= mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>user Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  
  <!-- Default form register -->
<form class="text-center border border-light p-5" action="view.php" method="post">

    <p class="h4 mb-4">User Information</p>
   <!--  <input type="hidden" name="id" value=<?php echo $nid; ?>> -->
  <p>First Name</p> <input type="text" name="first_name" id="defaultRegisterFormEmail" class="form-control mb-4" value=<?php echo $data['first_name'];?>>

  <p>Last Name</p> <input type="text" name="last_name" id="defaultRegisterFormEmail" class="form-control mb-4" value=<?php echo $data['last_name'];?>>

    <!-- E-mail -->
    <p>Email</p> <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" value=<?php echo $data['email'];?>>
  
     <!-- <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Update & Save</button>  -->
</form>
</div>

</body>
</html>
