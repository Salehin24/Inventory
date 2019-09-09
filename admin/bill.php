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
            <h1 class="page-header">Bill
			</h1>
        </div>
    </div>
			<?php
				$cq=mysqli_query($conn,"select * from sales_report");
				while($cqrow=mysqli_fetch_array($cq)){
					$saleid=$cqrow['saleid'];

			?>
<div class="container-fluid">
		<div class="col-md-6">
			<h4>Barcode: <?php echo $cqrow['bill_reff']; ?></h4>
			<h4>Customer Name: <?php echo $cqrow['customer_name']; ?></h4>
			<h4>Customer ID: <?php echo $cqrow['customer_code'];?></h4>
			<h4>Address: <?php echo $cqrow['address']; ?></h4>
</div>
		<div class="col-md-6">
			<h4>Bill number:<?php echo $cqrow['bill_reff']; ?></h4>
			<h4>Contact no: <?php echo $cqrow['customer_contact']; ?></h4>
			<h4>Refer Name: <?php echo $cqrow['reffer_name']; ?></h4>
		</div>
</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<table width="100%" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Pack Size</th>
							<th>Unit</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td><?php echo $cqrow['product_code']; ?></td>
							<td><?php echo $cqrow['product_name']; ?></td>
							<td><?php echo $cqrow['pack_size']; ?></td>
							<td><?php echo $cqrow['unit']; ?></td>
							<td><?php echo $cqrow['qty']; ?></td>
							<td align="right"><?php echo $cqrow['price'];?></td>
				
							<td align="right">

							</td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Subtotal =</strong></td>
							<td align="right"><strong><?php echo $cqrow['price'];?></strong></td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Discount =</strong></td>
							<td align="right"><strong>20%</strong></td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Deduct amount =</strong></td>
							<td align="right"><strong>0.00</strong></td>
						</tr>
						<tr>
							<td align="right" colspan="6"><strong>Total =</strong></td>
							<td align="right"><strong>5600.00</strong></td>
						</tr>
					<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
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