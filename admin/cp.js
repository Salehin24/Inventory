var room = 1;
function product_fields() {
 
    room++;
    var objTo = document.getElementById('product_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-4 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="productName" name="productName[]" ><option value="" >Select Product</option> <?php $sql = "SELECT * FROM product"; $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)); while( $row = mysqli_fetch_assoc($result) ) { ?> <option name="product" value= " <?php echo $row["productid"]; ?> " > <?php echo $row["product_name"]; ?> </option> <?php } ?> </select></div></div></div><div class="col-sm-4 nopadding"><div class="form-group"><input type="text" class="form-control" id="productCode" name="productCode[]" value="" placeholder="Product ID" readonly=""></div></div></div><div class="col-sm-4 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="productPrice" name="productPrice[]" value="" placeholder="Product Price"><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_product_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_product_fields(rid) {
	   $('.removeclass'+rid).remove();
   }