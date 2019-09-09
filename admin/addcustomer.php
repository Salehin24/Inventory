<?php
	include('session.php');
	
	$customer_id = $_POST['customer_id'];
	$customer_name = $_POST['customer_name'];
	$district = $_POST['district_id'];
	$address = $_POST['customer_address'];
	$contact = $_POST['customer_contact'];
	$reffer = $_POST['reffer_name'];
	
	mysqli_query($conn,"insert into customer (customer_id,customer_name,district_id,customer_address,customer_contact,reffer_name) values ('$customer_id', '$customer_name','$district','$address', '$contact', '$reffer')");
	$customerid=mysqli_insert_id($conn);


	?>
		<script>
			window.alert('Customer added successfully!');
			window.history.back();
		</script>
	<?php

?>