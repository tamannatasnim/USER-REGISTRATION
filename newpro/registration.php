<?php 
 include'connection.php';

if(!empty($_POST)){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql= "INSERT INTO users (name,email,password) values ('$name','$email','$password')";

	if($con->query($sql) == TRUE){
		
		echo "<h3 style=color:green;>User Create Successfully</h3>";
	}
	else{
		echo "Error:" .$sql . "<br" .$con->error;
	}
$con->close();

            $redirect = 'Location:'.$base_url.'user_data.php';
             header($redirect);
}
?>
