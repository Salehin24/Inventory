<?php include('session.php'); ?>
<?php include('header.php'); ?>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Customers
				<span class="pull-right">
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addcustomer"><i class="fa fa-plus-circle"></i> Add Customer</button>
				</span>
			</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
				  <tr>
					  <th>Customer ID</th>
					  <th>Name</th>
					  <th>District</th>
					  <th>Address</th>
					  <th>Contact</th>
					  <th>Reffer</th>
					  <th>Products</th>
					  <th>Action</th>
				  </tr>
                </thead>
                <tbody>

				<?php
					$cq=mysqli_query($conn,"select customer.customerid,customer.customer_id,customer.customer_name,customer.customer_address,customer.customer_contact,customer.reffer_name,district.district_name,cart.cartid,cart.productid, cart.product_code, cart.product_name,cart.product_price from customer,district,cart where district.id=customer.district_id");
					while($cqrow=mysqli_fetch_array($cq)){
				?>

						<tr>
						<td><?php echo $cqrow['customer_id']; ?></td>
						<td><?php echo $cqrow['customer_name']; ?></td>
						<td><?php echo $cqrow['district_name']; ?></td>
						<td><?php echo $cqrow['customer_address']; ?></td>
						<td><?php echo $cqrow['customer_contact']; ?></td>
						<td><?php echo $cqrow['reffer_name']; ?></td>
						<td><?php echo $cqrow['product_code']; ?>-<?php echo $cqrow['product_name']; ?>-<?php echo $cqrow['product_price']; ?></td>

				<td>
					<a class="btn btn-success btn-sm" href="edit_cp.php"><i class="fa fa-edit"></i> Edit</a>
					<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $cqrow['customerid']; ?>"><i class="fa fa-trash"></i> Delete</button>
					<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addpro"><i class="fa fa-plus-circle"></i> Add product</button>
					<?php include('user_button.php'); ?>
				</td>
							
			</tr>
		<?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
</div>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>