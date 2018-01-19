<?php
			
	session_start();
	echo "<pre>";
	print_r($_SESSION) ;
	echo "</pre>";
	
	echo "<br/>";
	$_SESSION['name'] = "Ariful Islam";
	$_SESSION['address'] = "Tangail";
	echo $_SESSION['name']."<br/>";
	echo $_SESSION['address'];
	
	//session_destroy();
	
	session_unset();
	echo $_SESSION['name']."<br/>";
	echo $_SESSION['address'];
	

?>