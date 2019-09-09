<?php
include_once("../conn.php");

	$customer_id =$_POST['dataString'];
	$sql = "SELECT * FROM customer WHERE customerid='$customer_id'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	//echo $sql;
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		//$data = $rows;



		//echo "<br />";
		//echo "<h4>customer Name: ";
		//echo $rows["customer_name"];
		//echo "</h4>";

		//echo "<br />";

		//echo "<h4>Customer ID: ";
		//echo $rows["customer_id"];
		//echo "</h4>";

		//echo "<br />";

		//echo "<h4>Address: ";
		//echo $rows["customer_address"];
		//echo "</h4>";

		//echo "<br />";

		//echo "<h4>Bill No: ";
		//echo $rows["bill_no"];
		//echo "</h4>";

		//echo "<br />";

		//echo "<h4>Contact: ";
		//echo $rows["customer_contact"];
		//echo "</h4>";

		//echo "<br />";

		//echo "<h4>Reffer: ";
		//echo $rows["reffer_name"];
		//echo "</h4>";

	
	//echo json_encode($data);


	echo '<div class="container-fluid">';
    echo  	'<div class="col-md-6">';
    echo        "<h4><b>Customer Name:  </b>";
    echo $rows["customer_name"];
    echo "</h4>";
    echo          "<h4><b>Customer ID:  </b>";
    echo $rows["customer_id"];
    echo "</h4>";
    echo            "<h4><b>Address:  </b>";
    echo $rows["customer_address"];
    echo "</h4>";
    echo    "</div>";

    echo    '<div class="col-md-6">';
    echo        "<h4><b>Bill number:  </b>";
    echo $rows["bill_no"];
    echo "</h4>";
    echo        "<h4><b>Contact no:  </b>";
    echo $rows["customer_contact"];
    echo "</h4>";
    echo        "<h4><b>Refer Name:  </b>";
    echo $rows["reffer_name"];
    echo "</h4>";
    echo    "</div>";
	echo 	"</div>";
	//echo 
	}

?>
