<?php
	include 'Dao/BaseDao.php';
	
	class UserDao extends BaseDao {
	
		function login($username, $password){
			$this->open();
			
			$stmt = $this->dbh->prepare("select * from employee where username=? and password=?");
			$stmt->bindParam (1, $username);
			$stmt->bindParam (2, $password);
			$stmt->execute();
			
			if($row = $stmt->fetch()){
				return true;
			} else {
				return false;
			}
			
			$this->close();
		}
		
		function getUser($username, $password){
			$this->open();
			
			$stmt = $this->dbh->prepare("select username from employee where username=? and password=?");
			$stmt->bindParam (1, $username);
			$stmt->bindParam (2, $password);
			$stmt->execute();
			
			$row = $stmt->fetch();
			return $row[0];
			
			$this->close();
		}
	}
?>
