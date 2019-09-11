<?php 

function connect()
{
	try{
	$username = 'root';
	$password = '';
	
	$con = new PDO('mysql:host=localhost;dbname=usertable;',$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if ($con) {
		return $con;
	}
	
	}catch(PDOException $e)
	{
		echo 'Connection failed '.$e->getMessage();
	}
}

?>