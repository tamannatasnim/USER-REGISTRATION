<?php

include'connection.php';

	if(!empty($_POST)){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
 

	$sql="INSERT INTO users_info (first_name,last_name,email,password) values ('$first_name','$last_name','$email','$password')";


	if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

header('Location: http://localhost/project1');
exit;


}
	?>