<?php
include_once("../conn.php");

$id=$_POST['id'];

	$sql = "SELECT * FROM product WHERE productid='$id'";
	$resultset = mysqli_query($conn, $sql);
	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data = $rows;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>