<?php
//Multidimentional Array. Tutorial 14
	$data = array(
		"Dhaka", //0
		array( //1
			"Gazipur", //1,0
			"Narayangonj", //1,1
			"Savar", //1,2
			array( 
				"Elenga", //1,3,0
				"Gopalpur", //1,3,1
				"Modupur", //1,3,2
				"Basail" //1,3,3
			)
		),
		"Chittagong", 
		"Rajshahi", 
		"Khulna",
		"Barisal" 
	);
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	
	echo "<pre>";
	print_r($data[1][3][1]);
	echo "</pre>";
 ?>