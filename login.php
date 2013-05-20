<?php
	session_start();
	include 'Dao/UserDao.php';
	$action = new UserDao();
		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){	
			$verrify = $action->login($_REQUEST['username'],$_REQUEST['password']);	
		if($verrify){
				$_SESSION['username'] = $_REQUEST['username'];
				
				header('Location: index.php');	
			}else{
					$errMsg = "...oops! wrong username and/or password";
			}
			
		}

?>
<!DOCTYPE html>
<html>
<head><script src="js/jquery-1.8.2.min.js"></script>
<link rel="stylesheet" href="css/shop.css">
<script src="js/shop.js"></script>
</head>
<body>
	<div id="login">
	<h1>Log In </h1>

	
	Username:<input type="text" name="username"/></br>
	Password:<input type="password" name="password"/></br>
	<button type = "submit" id="btn_login">LOGIN</button></br>
	
	<a href="register.php">Emplyee Registration</a>
	</div>


</body>
</html>
