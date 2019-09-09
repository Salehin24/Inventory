<?php
	include('session.php');
	$saleid=$_GET['id'];
	
	$a=mysqli_query($conn,"select * from sales_repot where saleid='$saleid'");
	$b=mysqli_fetch_array($a);
	
	header('location:sale_repot.php');

?>