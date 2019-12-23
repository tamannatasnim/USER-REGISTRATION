<?php

$base_url = "http://localhost/project1/";

$dbhost="localhost";
$bdusername="root";
$bdpassword="";
$bdname="user";
$con = mysqli_connect($dbhost, $bdusername, $bdpassword,$bdname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>