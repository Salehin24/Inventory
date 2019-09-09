<!-- Delete Customer -->
    <div class="modal fade" id="del_<?php echo $cqrow['customerid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete Customer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
					<?php
						$a=mysqli_query($conn,"select * from customer where customerid='".$cqrow['customerid']."'");
						$b=mysqli_fetch_array($a);
					?>
                    <h5><center>Customer Name: <strong><?php echo ucwords($b['customer_name']); ?></strong></center></h5>
					<form role="form" method="POST" action="deletecustomer.php<?php echo '?id='.$cqrow['customerid']; ?>">
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

<!-- Edit Customer -->
    <div class="modal fade" id="edit_<?php echo $customerid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit Customer</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
                    <?php
                        $a=mysqli_query($conn,"select * from customer where customerid='$customerid'");
                        $b=mysqli_fetch_array($a);
                    ?>
					<div style="height:10px;"></div>
                    <form role="form" method="POST" action="edit_customer.php<?php echo '?id='.$cqrow['customerid']; ?>">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Customer ID:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['customer_id']); ?>" class="form-control" name="customer_id">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Full Name:</span>
                            <input type="text" style="width:400px; text-transform:capitalize;" value="<?php echo ucwords($b['customer_name']); ?>" class="form-control" name="customer_name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">District:</span>
                            <input type="text" style="width:400px;" value="" class="form-control" name="district_name">
                        </div>
						<div style="height:10px;"></div>
						<div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Address:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['customer_address'] ?>" class="form-control" name="customer_address">
                        </div>
						<div style="height:10px;"></div>					
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Contact:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['customer_contact'] ?>" class="form-control" name="customer_contact">
                        </div>
                        <div style="height:10px;"></div>                    
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:120px;">Reffer Name:</span>
                            <input type="text" style="width:400px;" value="<?php echo $b['reffer_name'] ?>" class="form-control" name="reffer_name">
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




<!--
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

</script> -->