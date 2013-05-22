<?php

	include 'Dao/ShopDao.php';
	
	$prod_name = $_POST['prod_name'];
	$prod_price = $_POST['prod_price'];
	$quantity = $_POST['quantity'];

	
	$action = new ShopDao();
	$action -> add_products($prod_name, $prod_price, $quantity);

?>
