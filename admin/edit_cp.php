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
            <h1 class="page-header">Edit Customer
			</h1>
        </div>

                <div class="container-fluid">
                    <form role="form" method="POST" action="edit_customer.php?id=<?php echo $customerid; ?>">
                    <?php
                    $id = $_GET['id'];
                        $a=mysqli_query($conn,"select * from customer where customerid = $id");
                        $b=mysqli_fetch_array($a);
                    ?>
						
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Customer ID:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" value="<?php echo ucwords($b['customer_id']); ?>" name="customer_id" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Full Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" value="<?php echo ucwords($b['customer_name']); ?>" name="customer_name">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">District:</span>
                            <input type="text" style="width:400px;" class="form-control" name="district_name">
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Address:</span>
                            <input type="text" style="width:400px;" class="form-control" value="<?php echo $b['customer_address'] ?>" name="customer_address" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact:</span>
                            <input type="text" style="width:400px;" class="form-control" value="<?php echo $b['customer_contact'] ?>" name="customer_contact" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Reffer Name:</span>
                            <input type="text" style="width:400px;" class="form-control" value="<?php echo $b['reffer_name'] ?>" name="reffer_name" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </form>


<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Product Under Customer
			</h1>
        </div>



    <div class="row">
        <div class="col-lg-12">        
                    <form role="form" method="POST" action="addproduct.php">
						<div class="container-fluid">

<table width="100%" class="table table-striped table-bordered table-hover" id="cusTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Product ID</th>
            <th>Product Price</th>
        </tr>
    </thead>

                <tbody>


                                        <?php
                        $a=mysqli_query($conn,"select * from customer");
                        $b=mysqli_fetch_array($a);
                    ?>
                    <tr>
                        <td><input type="text" style="width:300px; text-transform:capitalize;" class="form-control" name="product_name" required value="<?php echo ucwords($b['product_name']); ?>"></td>
                        <td><input type="text" style="width:300px; text-transform:capitalize;" class="form-control" name="product_code" required readonly="" value="<?php echo ucwords($b['product_code']); ?>"></td>
                        <td><input type="text" style="width:300px; text-transform:capitalize;" class="form-control" name="product_code" required value="<?php echo ucwords($b['product_price']); ?>"></td>           
                    </tr>
                </tbody>
            </table>

               <!--   <div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                </div> -->
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
        </form>
    </div>
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