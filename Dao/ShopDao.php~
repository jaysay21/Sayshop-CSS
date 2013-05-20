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

		echo "<tr id=".$row[0].">";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "</tr>";
		
	}
}
	
	function add_products($prod_name, $prod_price, $quantity){
		
		$this->open();
	
		$stmt = $this->dbh->prepare("insert into inventory (prod_name,prod_price,quantity) values (?,?,?)");
		
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

        function addCustomer($cust_name, $cust_num, $address, $prod_n1,  $q1, $date, $warranty){

            $this->open();

            $stmt = $this->dbh->prepare("INSERT INTO customers (cust_name, cust_num, address, prod, quan, date, warranty) VALUES (?,?,?,?,?,?,?)");
            $stmt->bindParam(1, $cust_name);
            $stmt->bindParam(2, $cust_num);
            $stmt->bindParam(3, $address);
            $stmt->bindParam(4, $prod_n1);
            $stmt->bindParam(5, $q1);
            $stmt->bindParam(6, $date);
            $stmt->bindParam(7, $warranty);
	    $stmt->execute();


            $this->close();

    

        }

}


?>
