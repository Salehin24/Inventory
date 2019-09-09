<?php
	include('session.php');
	$code = $_POST['product_code'];
	$product = $_POST['productid'];
	$price = $_POST['product_price'];
	
	mysqli_query($conn,"insert into cart (product_code, productid, product_price) values ('$code', $product', '$price')");
	//$pid = mysqli_insert_id($conn); 
	
	//echo $code;
	//echo $product;
	//echo $price;



	?>
	<!--	<script>
			window.alert('Product added successfully!');
			window.history.back();
		</script> -->
	<?php
?>