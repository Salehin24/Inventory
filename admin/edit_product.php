<?php
	
	include('session.php');
	
	$id=$_GET['id'];
	
	$p=mysqli_query($conn,"select * from product where productid='$id'");
	$prow=mysqli_fetch_array($p);
	
	$code = $_POST['product_code'];
	$brand_name = $_POST['brand_name'];
	$product_name = $_POST['product_name'];
	$pack_size = $_POST['pack_size'];
	$unit = $_POST['unit'];
	$expiry_date = $_POST['ex_date'];
	
	mysqli_query($conn,"update product set product_code='$code', brand_name='$brand_name', product_name='$product_name', pack_size='$pack_size', unit='$unit', ex_date='$expiry_date' where productid='$id'");
	
	?>
		<script>
			window.alert('Product updated successfully!');
			window.history.back();
		</script>
	<?php

?>