$(document).ready(function(){  
	// code to get all records from table via select box
	$("#customer").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'customerid='+ id;    
		$.ajax({
			url: '../getcustomer.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(customerData) {
			   if(customerData) {
					$("#heading").show();		  
					$("#no_records").hide();
					$("#cus_id").text(customerData.customer_id);					
					$("#cus_name").text(customerData.customer_name);
					$("#dis_name").text(customerData.district_name);
					$("#cus_addr").text(customerData.customer_address);
					$("#cus_cont").text(customerData.customer_contact);
					$("#reff_name").text(customerData.reffer_name);
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
