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






});

// ********* buying products ************8

function buy_product(id){

	var product_to_buy = $("#inv_table tr #product_" + id).html();
	$("#prod_n1").val(product_to_buy);
    $("#customerform").dialog({
        show: 'slideDown',
        hide: 'slideUp'
    });

    $("#btn_customer").click(function(){

        var cust_name = $("input[name='cust_name']").val();
        var cust_num = $("input[name='cust_num']").val();
        var address = $("input[name='address']").val();
        var prod_name = $("select[name='prod_name']").val();
        var q1 = $("input[name='q1']").val();

        if(cust_name != "" && cust_num != "" && address != "" && q1 != "") {
            var date = NowDate();

            var warranty = warrant();

            var wordObj = {
                "cust_name": cust_name,
                "cust_num": cust_num,
                "address": address,
                "prod_n1": prod_name,
                "q1": q1,
                "date":date,
                "warranty":warranty,
                "prod_id": id
            };
            $.ajax({
                type: "POST",
                url: "addCustomerOrder.php",
                data: wordObj,
                success: function(data){
                    display_orders();
			display_products();
                    /*$(document.location.reload(true));*/
			$("#customerform").dialog("close");
			
                },
                error:function(data){
                    alert(data);
                }

            });
        }else{
            alert("rejected");
        }


    });


}


/***********FOR VIEWING****************/
function display_products() {
	$.ajax({
		type: "POST",
		url: "view_product.php",
		success: function(data){
			$("#inventory_table").html(data);
		}
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
