f(x) = x^2 + 2x + 4  <br/>
f(1) = 1^2 + 2.1 + 4  = 7<br/>
f(2) = 2^2 + 2.2 + 4  = 12<br/>
f(4) = 4^2 + 2.4 + 4  = 28<br/>
<?php
	//Function Arguments and Parameters. Tutorial 17
	function Addition($x,$y){
			$result = $x + $y;
			return "The addition result for ".$x." and ".$y." is ".$result;
		}
		
	echo Addition(5,34)."<br/>";
	echo Addition(50,40)."<br/>";
	echo Addition(5,47)."<br/>";
	echo Addition(15,20)."<br/>";
		
?>