<!DOCTYPE html>
<html>
<head>


<script src = "js/bootstrap.min.js"></script>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/shop.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/shop.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>

		
		
</head>
<body>	
	

	<div id="myMenus">
			<a href="index.php"><i class="icon-home icon-black"></i>Home</a></br>
			<a href="products.php"><i class="icon-briefcase icon-black"></i>Products</a></br>
			<a href="customer_order.php"><i class="icon-user icon-black"></i>Customer Orders</a></br>
			
						
</div>

		
	<fieldset id="inventory_field">
		<h2>INVENTORY</h2>
		
		<table>
		<tr>	
		<td>Product Name:</td>
		<td><input type="text" name="prod_name"/></br></td>
		</tr>	
		<td>Product Price:</td>
		<td><input type="text" name="prod_price"/></td></br>
		</tr>
		<td>Quantity:</td>
		<td><input type="text" name="quantity"/></td>
		</tr>
		
		</table>
			<button id="btn_product" class = "btn btn-primary">Add Product</button>
	
		
		<table class="table table-striped" id="inv_table">
		<tr>	
			<th>ID</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Quantity</th>
                        <tbody id="inventory_table" ></tbody>
        </tr>
  </table>
</fieldset>

    <!-- ============ customer form ============ -->

    <div id="customerform">
        <h2>Transaction</h2>
        <table>
            <tr>

                <td>Customer Name:</td>
                <td><input type="text" name="cust_name"/></br></td>
            </tr>
            <tr>

                <td>Contact Num:</td>
                <td><input type="text" name="cust_num"/></td></br>
            </tr>
            </tr>
            <tr>

                <td>Address:</td>
                <td><input type="text" name="address"/></td></br>
            </tr>
            <tr>

                <td>Product Name:</td>
                <td>
                    <input type="text" name="prod_n1" id="prod_n1" readonly />
                </td>
            </tr>
            <tr>

                <td>Quantity:</td>
                <td><input type="text" name="q1"/></td></br>
            </tr>


        </table>
        <button id="btn_customer" class = "btn btn-primary">Add Transaction</button>
    </div>
	
</body>
</html>
