<?php
	include('session.php');
	
	$id=$_GET['id'];

	$c=mysqli_query($conn,"select * from customer where customerid='$id'");
	$crow=mysqli_fetch_array($c);
	$customer_id = $_POST['customer_id'];
	$customer_name = $_POST['customer_name'];
	$address = $_POST['customer_address'];
	$contact = $_POST['customer_contact'];
	$reffer = $_POST['reffer_name'];

	mysqli_query($conn,"update customer set customer_id='$customer_id', customer_name='$customer_name', customer_address='$address', customer_contact='$contact', reffer_name='$reffer' where customerid='$id'");
	
	?>
		<script>
			window.alert('Customer updated successfully!');
			window.history.back();
		</script>
	<?php

?>