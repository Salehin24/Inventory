<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('../conn.php'); ?>
<script type="text/javascript" src="script/getData.js"></script>
<body>
<div id="wrapper">
<?php include('navbar.php'); ?>
<div style="height:50px;"></div>
<div id="page-wrapper">
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sales
			</h1>
        </div>
    </div>
    <!--
    <div class="row">
        <div class="col-lg-6">
			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">District Name:</span>
                <select style="width:300px;" class="form-control" name="category" id="customer">
                	<option value="" selected="selected">Select District</option>
					<?php
						$cat=mysqli_query($conn,"select * from customer");
						while($catrow=mysqli_fetch_array($cat)){
							?>
								<option value="<?php echo $catrow['customerid']; ?>"><?php echo $catrow['district_name']; ?></option>
							<?php
						}
					?>
				</select>
            </div>
		</div>

	<div class="col-lg-6">
		<div class="form-group input-group">
            <span style="width:100px;" class="input-group-addon">Select Customer:</span>
            <select style="width:300px;" class="form-control" name="category">
				<?php
					$cat=mysqli_query($conn,"select * from customer");
					while($catrow=mysqli_fetch_array($cat)){
						?>
							<option value="<?php echo $catrow['customerid']; ?>"><?php echo $catrow['customer_name']; ?></option>
						<?php
					}
				?>
			</select>
        </div>
	</div> -->


	<div class="page-header">
        <h3>
        <select id="customer">
        <option value="" selected="selected">Select Customer Name</option>
		<?php
		$sql = "SELECT * FROM customer LIMIT 10";
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		while( $rows = mysqli_fetch_assoc($resultset) ) { 
		?>
		<option value="<?php echo $rows["customerid"]; ?>"><?php echo $rows["customer_name"]; ?></option>
		<?php }	?>
		</select>
        </h3>	
        </div>


	<div id="display">
		<div class="row" id="heading" style="display:none;">
			<h3>
				<div class="col-sm-2">
					<strong>Customer ID</strong>
				</div>

				<div class="col-sm-2">
					<strong>Customer Name</strong>
				</div>

				<div class="col-sm-2">
					<strong>District</strong>
				</div>

				<div class="col-sm-2">
					<strong>Address</strong>
				</div>

				<div class="col-sm-2">
					<strong>Contact</strong>
				</div>

				<div class="col-sm-2">
					<strong>Reffer</strong>
				</div>

			</h3>
		</div>
		<br>

			<div class="row" id="records">
				<div class="col-sm-2" id="cus_id"></div>
				<div class="col-sm-2" id="cus_name"></div>
				<div class="col-sm-2" id="dis_name"></div>
				<div class="col-sm-2" id="cus_addr"></div>
				<div class="col-sm-2" id="cus_cont"></div>
				<div class="col-sm-2" id="reff_name"></div>
			</div>

			<div class="row" id="no_records">
				<div class="col-sm-4">Plese select employee name to view details</div>
			</div>
        </div>	
<!--
<div class="container-fluid">
		<div class="col-md-6">
			<h4>Customer Name: </h4>
			<h4>Customer ID: </h4>
			<h4>Address: </h4>
</div>
		<div class="col-md-6">
			<h4>Bill number: </h4>
			<h4>Contact no: </h4>
			<h4>Refer Name: </h4>
		</div>
</div> -->
		<div class="col-lg-6">
		<div class="form-group input-group">
            <span style="width:100px;" class="input-group-addon">Select Product:</span>
            <select style="width:300px;" class="form-control" name="category">
				<?php
					$cat=mysqli_query($conn,"select * from product");
					while($catrow=mysqli_fetch_array($cat)){
						?>
							<option value="<?php echo $catrow['productid']; ?>"><?php echo $catrow['product_name']; ?></option>
						<?php
					}
				?>
			</select>
        </div>
		
			<div class="form-group input-group">
                <span style="width:50px;" class="input-group-addon">Quantity:</span>
                <input type="number" class="form-control" name="product_code" required>
            </div>

		</div>
              
<div class="col-lg-6">
<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add</button>
</div>
		<br>

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
				<?php
					require_once '../conn.php';
					$query = mysqli_query($conn, "SELECT * FROM `product`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>


						<tr>
							<td><?php echo $fetch['product_code']?></td>
							<td><?php echo $fetch['product_name']?></td>
							<td><?php echo $fetch['pack_size']?></td>
							<td><?php echo $fetch['unit']?></td>
							<td><input type="text" name="{qty}" jAutoCalc="0" class="form-control form-control-sm"/></td>
							<td><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
							<td align="right"><input type="text" name="item_total" jAutoCalc="{qty} * {price}" class="form-control form-control-sm"/></td>
							<td align="right"></td>
						</tr>
			<?php } ?>
						<tr>
							<td align="right" colspan="6"><strong>SubTotal =</strong></td>
							<td align="right"><strong></strong></td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Discount =</strong></td>
							<td align="right"><strong><input type="text" name="discount" jAutoCalc="{sub_total}/100 * {discount}" class="form-control form-control-sm"/></strong></td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Deduct amount =</strong></td>
							<td align="right"><strong><input type="text" name="grand_total" jAutoCalc="{sub_total} - {grand_total}" class="form-control form-control-sm"/></strong></td>
						</tr>

						<tr>
							<td align="right" colspan="6"><strong>Total =</strong></td>
							<td>&nbsp;</td>
							<td align="right"><strong></strong></td>
						</tr>

					
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
				<a href="chalan.php" type="submit" class="btn btn-primary"><i class="fa fa-copy fa-fw"></i> Chalan</a>
				<a href="bill.php" type="submit" class="btn btn-primary"><i class="fa fa-copy fa-fw"></i> Bill</a>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
		</div>
	</div>
</div>

<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<?php include('script.php'); ?>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
</body>
</html>