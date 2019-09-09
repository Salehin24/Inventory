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
            <h1 class="page-header">Chalan
			</h1>
        </div>
    </div>

<div class="container-fluid">
		<div class="col-md-6">
			<h4>Barcode: </h4>
			<h4>Customer Name: </h4>
			<h4>Customer ID: </h4>
			<h4>Address: </h4>
</div>
		<div class="col-md-6">
			<h4>Bill number: </h4>
			<h4>Contact no: </h4>
			<h4>Refer Name: </h4>
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
							<th>Brand Name</th>
							<th>Pack Size</th>
							<th>Unit</th>
							<th>Quantity</th>
							<th>Expiry Date</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>PRO234</td>
							<td>Mobile</td>
							<td>Samsung</td>
							<td>10</td>
							<td>Piece</td>
							<td>1</td>
							<td>08/07/2019</td>
						</tr>

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