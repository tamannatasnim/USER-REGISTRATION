<?php
//include'connection.php';
$con = mysqli_connect("localhost", "root", "","user");
$nid = $_GET['id'];
$query = "SELECT * FROM `users_info` WHERE ID=$nid";
$run = mysqli_query($con, $query);
$data= mysqli_fetch_assoc($run);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <!-- Default form register -->
<form class="text-center border border-light p-5" action="edit_data.php" method="post">

    <p class="h4 mb-4"> Updated information</p>
    <input type="hidden" name="id" value=<?php echo $nid; ?>>

    <div class="form-row mb-4">

        <div class="col">
            <!-- First name -->
            <input type="text" name="first_name" id="defaultRegisterFormFirstName" class="form-control" value=<?php echo $data['first_name'];?>>
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" name="last_name" id="defaultRegisterFormLastName" class="form-control" value=<?php echo $data['last_name'];?>>
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" value=<?php echo $data['email'];?>>

    <!-- Password -->
    <input type="password"  name="password" id="defaultRegisterFormPassword" class="form-control" value=<?php echo $data['password']?>>
    <!-- Sign up button -->
  
     <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Update & Save</button> 


</form>
</div>

</body>
</html>
