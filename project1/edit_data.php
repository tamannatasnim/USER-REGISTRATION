<?php

include'connection.php';

	if(!empty($_POST)){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$id= $_POST['id'];
 
	$sql="UPDATE users_info SET first_name = '$first_name', last_name='$last_name', email='$email', password='$password' WHERE ID = $id";

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