<?php
//Variable Scope. Tutorial 18
$x = 10;

	function first()
	{
		global $x;
		echo "From First Function x is ".$x;
		echo "<br/>";
		$m = 20;
		
	}
	function second()
	{
		global $m;
		echo "From First Function x is ".$m;
		
	}

	//function calling
	first();
	second();


?>
