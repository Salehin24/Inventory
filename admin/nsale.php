<?php include('session.php'); ?>
<?php include('header.php'); ?>
<?php include('../conn.php'); ?>
<script type="text/javascript" src="order.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#districts").change(function(){
                var did = $("#districts").val();
                $.ajax({
                    url: 'data.php',
                    method: 'post',
                    data: 'did=' + did
                }).done(function(customers){
                    console.log(customers);
                    customers = JSON.parse(customers);
                    $('#customers').empty();
                    customers.forEach(function(customer){
                        $('#customers').append('<option value='+customer.customerid+'>' + customer.customer_name + '</option>')

                    })
                })
            })
        })
</script>

<script>
    $(document).ready(function(){  
        // code to get all records from table via select box
        $("#customers").change(function() {    
        //var id = $(this).find(":selected").val();
        var id=$('#customers option:selected').val();
        var dataString = id;  
        console.log (id);  
        $.ajax({
            url: 'getcustomer.php',
            dataType: "html",
            method:"post",
            data:({"dataString":dataString}), 
            cache: false,
            success: function(customerData) {


                $('#customerdata').html(customerData);
               if(customerData) {
                    $("#heading").show();         
                    $("#no_records").hide();                    
                    $("#cus_name").text(customerData.cus_name);
                    $("#cus_id").text(customerData.cus_id);
                    $("#cus_address").text(customerData.cus_address);
                    $("#bill_no").text(customerData.bill_no);
                    $("#cus_contact").text(customerData.cus_contact);
                    $("#reff_name").text(customerData.reff_name);
                    $("#records").show();        
                } else {
                    $("#heading").hide();
                    $("#records").hide();
                    $("#no_records").show();
                    }       
                } 
            });
        }) 
    });
    
    </script>

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
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group input-group">
                <span style="width:100px;" class="input-group-addon">District Name:</span>
                <select style="width:300px;" class="form-control" id="districts" name="districts">
                <option selected="" disabled="">Select District</option>
                    <?php 
                        require 'data.php';
                        $districts = loadDistricts();
                        foreach ($districts as $district) {
                            echo "<option id='".$district['id']."' value='".$district['id']."'>".$district['district_name']."</option>";
                        }
                     ?>
                </select>
            </div>
        </div>

    <div class="col-lg-6">
        <div class="form-group input-group">
            <span style="width:100px;" class="input-group-addon">Select Customer:</span>
            <select style="width:300px;" class="form-control" id="customers" name="customers">

       
            </select>
        </div>
    </div>


<div class="container-fluid" id="display">
    <div id="customerdata"></div>
    <br />

    <div class="row" id="records">
        <div class="col-sm-4" id="cus_name"></div>
        <div class="col-sm-4" id="cus_id"></div>
        <div class="col-sm-4" id="cus_address"></div>
        <div class="col-sm-4" id="bill_no"></div>
        <div class="col-sm-4" id="cus_contact"></div>
        <div class="col-sm-4" id="reff_name"></div>
    </div>         
    <div class="row" id="no_records"><div class="col-sm-4">Plese select dropdown to view details</div></div>
</div>

</div>
        <div class="container-fluid">
            <form class="form-horizontal invoice-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="invoice-form" method="post" role="form" novalidate>
                <hr>



<div class='row'>
    <div class='col-md-6'>
        <div class="form-group input-group">
            <span style="width:100px;" class="input-group-addon">Select Product:</span>
            <select style="width:300px;" class="form-control" name="category" id="products">
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
    </div>
        
        <div class='col-md-6'>
            <div class="form-group input-group">
                <span style="width:50px;" class="input-group-addon">Quantity:</span>
                <input type="number" class="form-control" name="product_qty" required>
            </div>
        </div>


<button id="addmore" class="btn btn-success addmore" type="button">+ Add</button>
        </div>

</div>



                <div class='row'>
                    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <table class="table table-bordered table-hover" id="invoiceTable">
                            <thead>
                                <tr>
                                    <th width="2%"><input id="check_all" class="formcontrol" type="checkbox"/></th>
                                    <th width="15%">Product Id</th>
                                    <th width="15%">Product Name</th>
                                    <th width="15%">Pack Size</th>
                                    <th width="15%">Price</th>
                                    <th width="15%">Quantity</th>
                                    <th width="15%">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="case" type="checkbox"/></td>
                                    <td><input type="text" data-type="productCode" name="data[0][product_id]" id="itemNo_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                    <td><input type="text" data-type="productName" name="data[0][product_name]" id="itemName_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                    <td><input type="text" data-type="productName" name="data[0][pack_size]" id="packsize_1" class="form-control autocomplete_txt" autocomplete="off"></td>
                                    <td><input type="number" name="data[0][price]" id="price_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
                                    <td><input type="number" name="data[0][quantity]" id="quantity_1" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
                                    <td><input type="number" name="data[0][total]" id="total_1" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class='row'>
                    <div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
                        <button id="delete" class="btn btn-danger delete" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button>
                       <!-- <button id="addmore" class="btn btn-success addmore" type="button">+ Add More</button> -->
                        <h2>Notes: </h2>
                        <div class="form-group">
                            <textarea class="form-control" rows='5' name="notes" id="notes" placeholder="Your Notes"></textarea>
                        </div>
                    </div>
                    
                    <div class='col-xs-offset-2 col-xs-9 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 col-sm-4 col-md-3 col-lg-3'>
                        
                            <div class="form-group">
                                <label>Subtotal: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="number" class="form-control" name="invoice_subtotal" id="subTotal" placeholder="Subtotal" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Discount: &nbsp;</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="discount" id="taxAmount" placeholder="Discount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                    <div class="input-group-addon">%</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deduct Amount: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="number" class="form-control" name="invoice_subtotal" id="subTotal" placeholder="Deduct Amount" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Total: &nbsp;</label>
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="number" class="form-control" name="invoice_total" id="totalAftertax" placeholder="Total" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;">
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!--
                <div class='row'>
                    <div class="col-xs-12 col-sm-12">
                        <div class="text-center">
                            <button data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" class="btn btn-success submit_btn invoice-save-bottom form-control"> <i class="fa fa-floppy-o"></i>  Save Invoice </button>
                        </div>
                    </div>
                </div>
                -->

    <div class='row'>
        <div class="col-xs-12 col-sm-12">
            <button class="btn btn-danger delete" type="button"><i class="fa fa-file-text" aria-hidden="true"></i> Bill</button>
            <button data-loading-text="Saving Invoice..." type="submit" name="invoice_btn" class="btn btn-success"><i class="fa fa-floppy-o"></i>  Save</button>
            <button class="btn btn-primary addmore" type="button"><i class="fa fa-file-text" aria-hidden="true"></i> Chalan</button>
        </div>
    </div>



            </form>
        </div> <!-- /container -->
    




</div>
    </div>
            <!--</div>
                <a href="chalan.php" type="submit" class="btn btn-primary"><i class="fa fa-copy fa-fw"></i> Chalan</a>
                <a href="bill.php" type="submit" class="btn btn-primary"><i class="fa fa-copy fa-fw"></i> Bill</a>
            </div>-->



<?php include('script.php'); ?>
<script src="custom.js"></script>
<script src="auto.js"></script>
<script>
    $("#addmore").on('click',function(){
        $productName=$('#products option:selected').value();
    html = '<tr>';
    html += '<td><input class="case" type="checkbox"/></td>';
    html += '<td><input type="text" data-type="productCode" name="data['+i+'][product_id]" id="itemNo_'+i+'" class="form-control autocomplete_txt" autocomplete="off"></td>';
    html += '<td><input type="text" data-type="productName" name="data['+i+'][product_name]" id="itemName_'+i+'" class="form-control autocomplete_txt" autocomplete="off" value="'+$productName+'"></td>';
    html += '<td><input type="text" name="data['+i+'][price]" id="price_'+i+'" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
    html += '<td><input type="text" name="data['+i+'][quantity]" id="quantity_'+i+'" class="form-control changesNo" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
    html += '<td><input type="text" name="data['+i+'][total]" id="total_'+i+'" class="form-control totalLinePrice" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';
    html += '</tr>';
    $('table#invoiceTable').append(html);
    i++;
});
</script>
</body>
</html>


