<!DOCTYPE html>
<html>
<head>

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/shop.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="css/shop.css" type="text/css"/>
		
</head>
<body>	
	<fieldset id="myTitle">
	<h1>Js Computer Shop Sytem</h1>
	
</fieldset>
		

	<fieldset id="myMenus">
			<a href="index.php">HOME</a></br>
			<a href="products.php">PRODUCTS</a></br>
			<a href="customer_order.php">ORDER</a></br>
			<a href="employee.php">Employee</a>
						
</fieldset>

	
		
	<fieldset id="myField">
		<div id="customerform">
		<h2>Customer Transaction</h2>
			<table>
		<tr>

		<td><label for="CustomerName">Customer Name:</label></td>
		<td><input type="text" name="cust_name"/></br></td>
	  </tr>
		<tr>

		<td><label for="ContactNumber">Contact Num:</label></td>
		<td><input type="text" name="cust_num"/></td></br>
		<tr>
	  </tr>
		<tr>

		<td><label for="Address">Address:</label></td>
		<td><input type="text" name="address"/></td></br>
	  </tr>
		<tr>

		<td><label for="ProductName">Product Name:</label></td>
		<td><input type="text" name="prod_name"/></td></br>
	 </tr>
		<tr>

		<td><label for="Price">Price:</label></td>
		<td><input type="text" name="prod_price"/><tr></br>
	 </tr>
		<tr>

		<td><label for="Quantity">Quantity:</label></td>
		<td><input type="text" name="quantity"/></td></br>
	 </tr>
		<tr>
		<td><label for="Date">Date:</label></td>
		<td><input type="text" name="date"/></td></br>
	</tr>
		<tr>

		<td><label for="Warranty">Warranty:</label></td>
		<td><input type="text" name="warranty"/></td></br></br>
	</tr>

</table>
	</div>
		<button id="btn_customer">Add Transaction</button>


</table>
		<table id="customers" border="10">
		<tr>
			<td>Customer Name</td>
			<td>Contact Number</td>
			<td>Address</td>
			<td>Product Name</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Date</td>
			<td>Warranty</td>
			
	</tr>	
  </table>
</fieldset>
	
		
		<div id="advertisment">

	
		<img id="pic1" src="Images/1.jpg"/>
		<img  id="pic2"src="Images/many.jpg"/>
</div>
</body>
</html>
