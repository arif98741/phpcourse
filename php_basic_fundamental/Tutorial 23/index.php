<?php 	

	//echo "<pre>";
	//print_r($_COOKIE);
	//echo "</pre>";

	//setcookie('address',"Dhaka");
	//setcookie('address','Dhaka',time());
	<?php
	if(isset($_COOKIE['address'])){
		echo "set";
	}else{
		echo "not set";
	}

	setcookie('address','Dhaka',time()-5);
?>