<?php
	session_start();
	
	if (!isset($_SESSION['username'])){
		header('Location: login.php');
	} else {
		$username = $_SESSION['username'];
	}
?>
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
	<fieldset id="myTitle">
	<h1 id="titles">Js Computer Shop Sytem</h1><a href="logout.php" id="logout"><i class="icon-off icon-black"></i>LOGOUT</a>
	
</fieldset>
		
	<div id="myMenus" >
			<a href="index.php"><i class="icon-home icon-black"></i>Home</a></br>
			<a href="products.php"><i class="icon-briefcase icon-black"></i>Products</a></br>
			<a href="customer_order.php"><i class="icon-user icon-black"></i>Customer Orders</a></br>
			
						
</div>



	
		
	<fieldset id="myField">
	<img src="../Images/prod.jpg">

</fieldset>
	

	<div id="advertisment">

	
		<img id="pic1" src="Images/1.jpg"/>
		<img  id="pic2"src="Images/many.jpg"/>
</div>

</body>
</html>
