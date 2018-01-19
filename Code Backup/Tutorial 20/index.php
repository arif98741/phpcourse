<a href="?id=5&address=Tangail">Click Here</a>

	<?php
		//Super Global Variable $_GET. Tutorial 20
		if(isset($_GET['address'])){
		$id = $_GET['id'];
		$address = $_GET['address'];
		echo $id;
		echo "<br/>";
		echo $address;
	}
?>