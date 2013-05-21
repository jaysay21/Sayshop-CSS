$(function(){
	
/**********Calling functions for Viewing*********/

		display_products();	
		display_orders();
			
	


/*****ADDDING PRODUCTS********/
	$("#btn_product").click(function(){
  

		
		var prodObj = {

			"prod_name":$("input[name='prod_name']").val(),
			"prod_price":$("input[name='prod_price']").val(),
			"quantity":$("input[name='quantity']").val()

		};

     
					var a = $("input[name='prod_name']").val();
					var b = $("input[name='prod_price']").val();
					var c = $("input[name='quantity']").val();
		
	
			if(a==" " && b==" " && c==" "){

				alert("Please fill everything");

			}else{ 


		$.ajax({
			type: "POST",
			url: "add_product.php",
			data: prodObj,
			success: function(){
				display_products();				
			},
			error: function(data){
				alert(data);
			}
		});

	}
});


    $("#btn_customer").click(function(){
	
	$cust_name = "cust_name";
	$cust_num = "cust_num";
	$address = "address";
	$prod_n1 = "prod_n1";
	$prod_p1 = "prod_p1";
	$q1 = "q1";	

	if($cust_name != "" && $cust_num != "" && $address != "" && $prod_n1 != "" && $prod_p1 != "" && $q1 != "") {
        var date = NowDate();

        var warranty = warrant();

        var wordObj = {
            "cust_name":$("input[name='cust_name']").val(),
            "cust_num":$("input[name='cust_num']").val(),
            "address":$("input[name='address']").val(),
            "prod_n1":$("select[name='prod_n1']").val(),
            "q1":$("input[name='q1']").val(),
            "date":date,
            "warranty":warranty
        };

        $.ajax({
            type: "POST",
            url: "addCustomerOrder.php",
            data: wordObj,
            success: function(data){
                $("#customers").append(data);
		$(document.location.reload(true));
            },
            error:function(data){
                alert(data);
            }

        });
	}else{
		alert("rejected");
	}


    });



});


/***********FOR VIEWING****************/
function display_products() {
	$.ajax({
		type: "POST",
		url: "view_product.php",
		success: function(data){
			$("#inventory_table").html(data);
		},
	});

}
function display_orders() {



	$.ajax({

		type: "POST",
		url: "view_customer.php",
		success: function(data){
			$("#customers").html(data);
		
		},


	});

}
//-----------------------------------------------------------------------------------------------------------------------
function NowDate(){
  
  var d = new Date();
  var dt = d.getDate();
  var m = d.getMonth()+1;
  var y = d.getFullYear();
  var present = y + "-" + m + "-" + dt;
  return present; 
 
}
function warrant(){
  
  var d = new Date();
  var dt = d.getDate();
  var m = d.getMonth()+4;
  var y = d.getFullYear();
  var warranty = y + "-" + m + "-" + dt;
  return warranty; 
 
}
