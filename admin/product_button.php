<!-- Delete Product -->
    <div class="modal fade" id="delproduct_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Product Name: <strong><?php echo $b['product_name']; ?></strong></center></h5>
					<form role="form" method="POST" action="deleteproduct.php<?php echo '?id='.$pid; ?>">
                </div>                 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit Product -->
    <div class="modal fade" id="editprod_<?php echo $pid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from product where productid='$pid'");
						$b=mysqli_fetch_array($a);
					?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_product.php<?php echo '?id='.$pid; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product ID:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['product_code']); ?>" class="form-control" name="product_code">
                        </div>
						<div style="height:10px;"></div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Brand Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['brand_name']); ?>" class="form-control" name="brand_name">
                        </div>
						<div style="height:10px;"></div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Product Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['product_name']); ?>" class="form-control" name="product_name">
                        </div>
						<div style="height:10px;"></div>

						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Pack Size:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['pack_size'] ?>" class="form-control" name="pack_size">
                        </div>
						<div style="height:10px;"></div>

						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Unit:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['unit'] ?>" class="form-control" name="unit">
                        </div>
						<div style="height:10px;"></div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Expiry Date:</span>
                            <input type="date" style="width:400px;" value="<?php echo $b['ex_date'] ?>" class="form-control" name="ex_date">
                        </div>
                        <div style="height:10px;"></div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
					</form>
                </div>
        </div>
    </div>
<!-- /.modal -->




