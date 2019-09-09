<?php
	include('session.php');
	$customerid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from customer where customerid='$customerid'");
	$b=mysqli_fetch_array($a);
	
	mysqli_query($conn,"delete from customer where customerid='$customerid'");
	
	header('location:customer.php');

?>