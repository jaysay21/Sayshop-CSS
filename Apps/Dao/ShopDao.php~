<?php

	include 'BaseDao.php';
	

	class ShopDao extends BaseDao{

/***********PRODUCTS************/


	function view_products(){
		
		$this->open();

		$stmt = $this->dbh->prepare("select * from inventory");
		$stmt->execute();

		$this->close();

		while($row = $stmt->fetch()){
			if($row[3] <= 0) {
				echo "<tr id='".$row[0]."'>";
				echo "<td>".$row[0]."</td>";
				echo "<td id = 'product_".$row[0]."'>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>Out Of Stock</td>";
				echo "</tr>";
			} else {
				echo "<tr id='".$row[0]."'>";
				echo "<td>".$row[0]."</td>";
				echo "<td id = 'product_".$row[0]."'>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td><button onclick = 'buy_product(".$row[0].")'>Buy</button></td>";
				echo "</tr>";
			}
		
		
	}
}
	
	function add_products($prod_name, $prod_price, $quantity){
		
		$this->open();
	
		$stmt = $this->dbh->prepare("insert into inventory (prod_name,prod_price,stocks) values (?,?,?)");
		
		$stmt->bindParam(1,$prod_name);
		$stmt->bindParam(2,$prod_price);
		$stmt->bindParam(3,$quantity);
		$stmt->execute();
	     	
	     
		$this->close();
			
}
	

	/***********CUSTOMERS************//***********CUSTOMERS************/

	function viewCustomer(){

	$this->open();
	
	$stmt = $this->dbh->prepare("SELECT * from customers");
	$stmt -> execute();

	$this->close();

	while($row = $stmt->fetch()){
	
		echo "<tr id=".$row[0].">";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>".$row[7]."</td>";
		echo "</tr>";
		

	}	
}

        function addCustomer($cust_name, $cust_num, $address, $prod_name,  $q1, $date, $warranty, $prod_id){

            $this->open();
            $stmt = $this->dbh->prepare("INSERT INTO customers (cust_name, cust_num, address, prod, quan, date, warranty) VALUES (?,?,?,?,?,?,?)");
            $stmt->bindParam(1, $cust_name);
            $stmt->bindParam(2, $cust_num);
            $stmt->bindParam(3, $address);
            $stmt->bindParam(4, $prod_name);
            $stmt->bindParam(5, $q1);
            $stmt->bindParam(6, $date);
            $stmt->bindParam(7, $warranty);
	    $stmt->execute();


            $cust_id=$this->dbh->lastInsertId();
            $stmt2= $this->dbh->prepare("insert into sales (cust_id,prod_id,quantity) values (?,?,?)");
            $stmt2->bindParam(1, $cust_id);
            $stmt2->bindParam(2, $prod_id);
	    $stmt2->bindParam(3, $q1);
            $stmt2->execute();

	    $stmt3 = $this->dbh->prepare("select stocks from inventory where prod_id = ?");
	    $stmt3->bindParam(1,$prod_id);
	    $stmt3->execute();

	    $stocks=$stmt3->fetch();
	    $remaining_stocks=$stocks[0]-$q1;
		
	   $stmt4=$this->dbh->prepare("update inventory set stocks = ? where prod_id =? ");
	   $stmt4->bindParam(1,$remaining_stocks);
	   $stmt4->bindParam(2,$prod_id);
	   $stmt4->execute();
            $this->close();

    

        }


}


?>
