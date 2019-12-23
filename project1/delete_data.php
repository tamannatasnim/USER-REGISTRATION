<?php

$con = mysqli_connect("localhost", "root", "","user");

	//$sql="UPDATE users_info SET first_name = '$first_name', last_name='$last_name', email='$email', password='$password' WHERE ID = $id";
	$sql="DELETE FROM users_info WHERE ID = $id";
	 $run=mysqli_query($con, $sql);

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