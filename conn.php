<?php

$conn = mysqli_connect("localhost","root","","epos");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>