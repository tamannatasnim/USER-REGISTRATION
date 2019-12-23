<?php 
 include'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>index</title>
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
    <h3 style=color:green;>Sign Up</h3>

    <form action="<?php echo $base_url;?>registration.php" method="post" accept-charset="utf-8">

     <b>Name:</b> <input type="text" name="name"><br><br>
     <b>Email:</b> <input type="email" name="email"><br><br>
     <b>Password:</b><input type="password" name="password"><br><br>
     <button type="submit" name="submit" value="submit">Submit</button>
    </form>

  </div>
  
</div>
</body>
</html>
