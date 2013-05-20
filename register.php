<?php

	include 'Dao/UserDao.php';
	$action = new UserDao();
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['password2']) && isset($_REQUEST['name']){	
			$verrify = $action->registered($_REQUEST['firstname'], $_REQUEST['middlename'], $_REQUEST['lastname'], $_REQUEST['birthday'], $_REQUEST['age'], $_REQUEST['gender'], $_REQUEST['address'], $_REQUEST['contact_number'], $_REQUEST['status'], $_REQUEST['alternate_name'], $_REQUEST['username'], $_REQUEST['email_address'], $_REQUEST['password'], $_REQUEST['password2']);
		
		header('Location: login.php'); 
			
		}/*else{
					$verMsg = "<div id = 'mySuc'><img id = 'suc' src = 'icons/success.png'>Successfully Registered</div>";
		}
		*/
?>

<!DOCTYPE html>

<html>
<head>
</head>
<body>




		<div id="register">
	<h1>Register</h1>
	
	<form>
		
		Username:<input type="text" name="username"></br>
		Password:<input type="password" name="password"/></br>
		Re-type Password:<input type="password" name="password2"/></br>
		Name:<input type="text" name="name"/></br>
		<button type="hidden"id="btn_register">Submit</button>

  </form>	
</div>
</body>
</html>
