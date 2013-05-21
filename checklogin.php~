<?php
session_start();

if(!(($_POST['username']=="") && ($_POST['password']==""))){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$user = "student1";
	$pass = "password";
	$d_name = "Sayshop";
	
	$dbh = new PDO("mysql:host=localhost; dbname=".$d_name, $user, $pass); 
	
	$stmt = $dbh->prepare("select * from employee where username like ?");
	$stmt->bindParam (1, $_POST['username']);
	$stmt->execute();
	
	$row = $stmt->fetch();
	
	if(isset($_SESSION['username'])){
		header('Location: index.php');
	} else {
		if(isset($_POST['username']) && isset($_POST['password'])){
			if(($row[1] == $_POST['username']) && ($row[2] == $_POST['password'])){
				$_SESSION['username'] = $_POST['username'];
				header('Location: index.php');
			} else {
				header('Location: login.php');
			}
		}
	}
} else {
	header('Location: login.php');

}	
?>
