<?php

include'connection.php';

$id = $_GET['id'];
$sql="DELETE FROM users_info WHERE ID = $id";

  if ($con->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$redirect = 'Location:'.$base_url.'user_info.php';

header($redirect);

?>
