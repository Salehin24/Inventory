<?php
	include('session.php');
	
	$code = $_POST['product_code'];
	$brand_name = $_POST['brand_name'];
	$product_name = $_POST['product_name'];
	$pack_size = $_POST['pack_size'];
	$unit = $_POST['unit'];
	$expiry_date = $_POST['ex_date'];
	
	mysqli_query($conn,"insert into product (product_code,brand_name,product_name,pack_size,unit,ex_date) values ('$code','$brand_name','$product_name','$pack_size','$unit', '$expiry_date')");
	$pid=mysqli_insert_id($conn);
	
	?>
		<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script>
	<?php
?>