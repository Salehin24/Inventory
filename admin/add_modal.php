
<script src="cp.js"></script>


<!-- Add Product -->
    <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Product</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addproduct.php">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Product ID:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="product_code" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Brand Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="brand_name" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Product Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="product_name" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Pack Size:</span>
                            <input type="text" style="width:400px;" class="form-control" name="pack_size" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Unit:</span>
                            <input type="text" style="width:400px;" class="form-control" name="unit">
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Expiry Date:</span>
                            <input type="date" style="width:400px;" class="form-control" name="ex_date">
                        </div>          
						</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Customer -->
    <div class="modal fade" id="addcustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Customer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <form role="form" method="POST" action="addcustomer.php">
						<div class="container-fluid">
						<div style="height:15px;"></div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Customer ID:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="customer_id" required>
                        </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Full Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="customer_name">
                        </div>
                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">District:</span>
                        <select style="width:400px;" class="form-control" name="district_id" id="district">
                            <?php
                                $dis=mysqli_query($conn,"select * from district");
                                while($disrow=mysqli_fetch_array($dis)){
                                    ?>
                                <option value="<?php echo $disrow['id']; ?>"><?php echo $disrow['district_name']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
						<div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Address:</span>
                            <input type="text" style="width:400px;" class="form-control" name="customer_address" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Contact:</span>
                            <input type="text" style="width:400px;" class="form-control" name="customer_contact" required>
                        </div>
                        <div class="form-group input-group">
                            <span style="width:120px;" class="input-group-addon">Reffer Name:</span>
                            <input type="text" style="width:400px;" class="form-control" name="reffer_name" required>
                        </div>
					</div>
				</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
					</form>
                </div>
			</div>
		</div>
    </div>
<!-- /.modal -->

<!-- Add Product -->
 <!--   <div class="modal fade" id="#add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Products Under Customer</h4></center>
                </div>

        <div class="modal-body">
            <div class="container-fluid">
                <form role="form" method="POST" action="addpro.php">

<div id="product_fields"></div>
    <div class="col-sm-4 nopadding">
        <div class="form-group">
            <div class="input-group">
                <select class="form-control" id="productName" name="product">
                    <option value="">Select Product</option>

    <?php
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        while( $row = mysqli_fetch_assoc($result) ) { 
        ?>

        <option name="product" value="<?php echo $row['productid']; ?>"><?php echo $row['product_name']; ?></option>
            <?php } ?>
        </select> 
                  
            </div>

        </div>

    </div>



<div class="col-sm-4 nopadding">
  <div class="form-group">              
    <input type="text" class="form-control" id="productCode" name="productCode[]" value="" placeholder="Product Id" readonly="">
  </div>
</div>


<div class="col-sm-4 nopadding">
  <div class="form-group">
    <div class="input-group">
    <input type="text" class="form-control" id="productPrice" name="productPrice[]" value="" placeholder="Product Price">

      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="product_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
      </div>
    </div>
  </div>
<div class="clear"></div>

</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<!-- /.modal -->

<!-- Add Product under customer -->
    <div class="modal fade" id="addpro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Supplier</h4></center>
                </div>
    <div class="modal-body">
	<div class="container-fluid">
        <form role="form" method="POST" action="addsupplier.php">

<div id="product_fields"></div>
    <div class="col-sm-4 nopadding">
        <div class="form-group">
            <div class="input-group">
                <select class="form-control" id="productName" name="product">
                    <option value="">Select Product</option>
                        <?php
                            $sql = "SELECT * FROM product";
                            $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                            while( $row = mysqli_fetch_assoc($result) ) { 
                        ?>
                    <option name="product" value="<?php echo $row['productid']; ?>"><?php echo $row['product_name']; ?></option>
                        <?php } ?>
                </select>  
            </div>
        </div>
    </div>

<div class="col-sm-4 nopadding">
  <div class="form-group">              
    <input type="text" class="form-control" id="productCode" name="productCode[]" value="" placeholder="Product Id" readonly="">
  </div>
</div>

<div class="col-sm-4 nopadding">
  <div class="form-group">
    <div class="input-group">
    <input type="text" class="form-control" id="productPrice" name="productPrice[]" value="" placeholder="Product Price">

      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="product_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
      </div>
    </div>
  </div>
<div class="clear"></div>
</div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
        </div>

    </div>
</form>
</div>
<!-- /.modal -->



<!-- Add Product under customer 
<div class="modal fade" id="addpro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Product Under Customer</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
                <form role="form" method="POST" action="addpro.php">
                    <div class="container-fluid">
                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">Product:</span>
                        <select style="width:400px;" class="form-control" name="productid">
                            <?php
                                $pro=mysqli_query($conn,"select * from product");
                                while($prorow=mysqli_fetch_array($pro)){
                                    ?>
                                        <option value="<?php echo $prorow['productid']; ?>"><?php echo $prorow['product_name']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">Product ID:</span>
                        <input type="text" style="width:400px; text-transform:capitalize;" class="form-control" name="product_code" required>
                    </div>

                    <div class="form-group input-group">
                        <span style="width:120px;" class="input-group-addon">Price:</span>
                        <input type="text" style="width:400px;" class="form-control" name="product_price" required>
                    </div>           
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
<!-- /.modal -->



<script>

$(document).ready(function(){  
    // code to get all records from table via select box
    $("#productName").change(function() {    
        var id = $("input[name='product']:checked").val();    
        $.ajax({
            url: 'getProduct.php',
            dataType: "json",
            method:"POST",
            data: id,  
            cache: false,
            success: function(employeeData) {
            if(employeeData) {                
                    $("#productCode").text(employeeData.product_code);     
                }

       
            } 
        });
    }) 
});

</script>