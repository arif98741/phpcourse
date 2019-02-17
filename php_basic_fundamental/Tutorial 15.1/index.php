<h2> Array Sorting - Tutorial 15.1 </h2>
	<?php
		$arr = array(4,34,35,32,8,34,83);
		/*$arr = array(
			"a" =>34,
			"d" =>78,
			"c" =>14,
			"b" =>35,
		);*/
		sort($a);
		rsort($a);
		//ksort($arr);
		//krsort($a);
		foreach($arr as $r)
		{
			echo $r."</br>";
		}
		
		
	?>
	