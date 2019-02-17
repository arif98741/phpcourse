	<?php
    //Data Validation - Tutorial 24 
	$x = filter_data("Dhaka"); //function called from here
	$y = filter_data("Rajshahi"); //function called from here
	$z = filter_data("Khulna"); //function called from here
	
	
	//validation function declaration
	function filter_data($d){
		$d = stripslashes($d);
		$d = trim($d);
		$d = htmlspecialchars($d);
		return $d;
	}
	
	
?>
			
			