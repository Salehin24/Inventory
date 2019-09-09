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
            <h1 class="page-header">Sales Report
			</h1>
        </div>
    </div>

			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">Date:</span>
				<input type="date">	
            </div>

			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">Customer:</span>
                <select style="width:150px;" class="form-control" name="category" id="assigned-user-filter">
					<?php
						$cat=mysqli_query($conn,"select * from sales_report");
						while($catrow=mysqli_fetch_array($cat)){
							?>
								<option value="<?php echo $catrow['customerid']; ?>"><?php echo $catrow['customer_name']; ?></option>
							<?php
						}
					?>
				</select>
            </div>

			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">Product:</span>
                <select style="width:150px;" class="form-control" name="category" id="assign-product-filter">
					<?php
						$cat=mysqli_query($conn,"select * from sales_report");
						while($catrow=mysqli_fetch_array($cat)){
							?>
								<option value="<?php echo $catrow['productid']; ?>"><?php echo $catrow['product_name']; ?></option>
						<?php
						}
					?>
				</select>
            </div>

			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">Reffer:</span>
                <select style="width:150px;" class="form-control" name="category" id="assign-reff-filter">
					<?php
						$cat=mysqli_query($conn,"select * from sales_report");
						while($catrow=mysqli_fetch_array($cat)){
							?>
								<option value="<?php echo $catrow['customerid']; ?>"><?php echo $catrow['reffer_name']; ?></option>
							<?php
						}
					?>
				</select>
            </div>

			<div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">Bill Reff no.:</span>
                <select style="width:150px;" class="form-control" name="category" id="assign-bill-filter">
					<?php
						$cat=mysqli_query($conn,"select * from sales_report");
						while($catrow=mysqli_fetch_array($cat)){
							?>
								<option value="<?php echo $catrow['saleid']; ?>"><?php echo $catrow['bill_reff']; ?></option>
							<?php
						}
					?>
				</select>
            </div>

		<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-print"></i> Print</button>

    <div class="row">
        <div class="col-lg-12">
            <table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
                <thead>
				  <tr>
					  <th>Bill ref</th>
					  <th>Date</th>
					  <th>Customer Name</th>
					  <th>Product Name</th>
					  <th>Reffer Name</th>
					  <th>Bill Total</th>
					  <th>Receive Amount</th>
					  <th>Status</th>
					  <th>Remark</th>
					  <th>Action</th>
				  </tr>
                </thead>
                <tbody>
				<?php
$db = new PDO("mysql:host=localhost;dbname=epos","root","");
$stmt = $db -> prepare("select * from sales_report");
$stmt->execute();
while($row=$stmt->fetch()){
	?>

					<tr>
						<td><?php echo $row['bill_reff']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['customer_name']; ?></td>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['reffer_name']; ?></td>
						<td><?php echo $row['bill_total']; ?></td>
						<td><?php echo $row['receive_amount']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><?php echo $row['remark']; ?></td>
						<td>
							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#"><i class="fa fa-edit"></i> Edit</button>
							<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#del_<?php echo $csrow['saleid']; ?>"><i class="fa fa-trash"></i> Delete</button>
							<a href="bill.php" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-fullscreen"></span> View Full Details</a>
							<?php include('sales_button.php'); ?>
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
<script src="order.js"></script>
<?php include('modal.php'); ?>
<?php include('add_modal.php'); ?>
<script src="custom.js"></script>
<script>
	$('#cusTable').ddTableFilter();
</script>
</body>
</html>

<script>
	// Assigned User Dropdown Filter
$('#assigned-user-filter').on('change', function() {
  var assignedUser = this.value;
  
  if(assignedUser === 'None'){
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-user') != assignedUser;
    }).show();
  }else{
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-user') == assignedUser;
    }).show();   
  }
});

// Assigned User Dropdown Filter
$('#assigned-product-filter').on('change', function() {
  var assignedProduct = this.value;
  
  if(assignedProduct === 'None'){
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-product') != assignedProduct;
    }).show();
  }else{
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-product') == assignedProduct;
    }).show();   
  }
});

// Assigned User Dropdown Filter
$('#assigned-reff-filter').on('change', function() {
  var assignedReff = this.value;
  
  if(assignedReff === 'None'){
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-reff') != assignedReff;
    }).show();
  }else{
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-reff') == assignedReff;
    }).show();   
  }
});


// Assigned User Dropdown Filter
$('#assigned-bill-filter').on('change', function() {
  var assignedBill = this.value;
  
  if(assignedBill === 'None'){
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-bill') != assignedBill;
    }).show();
  }else{
    $('.task-list-row').hide().filter(function() {
      return $(this).data('assigned-bill') == assignedBill;
    }).show();   
  }
});


</script>