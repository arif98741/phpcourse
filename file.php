<?php 
	if(isset($_GET['address'])){
		$id = $_GET['id'];
		$address = $_GET['address'];
		echo $id;
		echo "<br/>";
		echo $address;
	}
?>