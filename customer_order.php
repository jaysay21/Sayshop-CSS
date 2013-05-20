<!DOCTYPE html>
<html>
<head>

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/shop.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/shop.css" type="text/css"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
<script src = "js/bootstrap.min.js" type = "text/javascript"></script>

</head>
<body>	
	

<div id="myMenus">
			<a href="index.php">HOME</a></br>
			<a href="products.php">Products</a></br>
			<a href="customer_order.php">Customer Orders</a></br>
			<a href="employee.php">Employee</a>
						
</div>


	
		
	
	<fieldset id="myField">
		<div id="customerform">
	
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
		<select name = "prod_n1">
		<option>Mouse</option>
		<option>Monitor</option>		
		<option>Keyboard</option>		
		</select>
		</td> 
	</tr>
		<tr>

		<td>Quantity:</td>
		<td><input type="text" name="q1"/></td></br>
	 </tr>
		

</table>
             <button id="btn_customer" class = "btn btn-primary">Add Transaction</button>
	</div>

		

</table>
	
		<table id="cust_table" border="5">
		<tr>    
                        <thead>
			<th>ID</th>
			<th>Customer Name</th>
			<th>Contact Number</th>
			<th>Address</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Date</th>
			<th>Warranty</th>
                        </thead>
			<tbody id="customers"></tbody>
	</tr>
	
  </table>
	
</fieldset>
	
		

</body>
</html>
