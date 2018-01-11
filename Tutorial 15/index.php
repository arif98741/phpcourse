
<?php
//Array Print Values. Tutorial 15
	$data = array(
		"Java",
		"C",
		"C++",
		"PHP",
		"Python",
		"JavaScript",
		"Fortran"
		
	);
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	
	$i = 0;
	
	while($i<count($data))
	{
		echo $data[$i]."<br/>";
		$i++;
		
	}
	
 ?>