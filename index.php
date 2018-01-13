
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Online Course For Learning</title>
	<style type="text/css">
		.main{
			width: 75%;
			margin: 10px auto;
			background: #c0d6d8;
			
		}
		.header,.footer{
			background: #46592dc4;
			color: #e0e0d6;
			text-align: center;
			height: 87px;
		}
		.content{
			min-height: 420px;
			padding: 5px;
		}
		.content p{font-size:19px;}
		.content h2{margin:0px; text-align:center;}
		.header h1, .header p, .footer h1, .footer p{margin:0px;}
		.footer a{text-decoration:none; color:brown;}
	</style>
</head>
<body>
	<div class="main">
		<div class="header">
			<h1>PHP Basic Fundamental Course</h1>
			<p>Learn and Enjoy</p>
		</div>
		<div class="content">
			<h2>Super Global Variable $_REQUEST and $_POST. Tutorial 21 </h2>
			
			<a href="?id=5&address=Tangail">Click Here</a>
			<p>
				<?php
				if(isset($_GET['address'])){
				$id = $_GET['id'];
				$address = $_GET['address'];
				echo $id;
				echo "<br/>";
				echo $address;
	}
				?>
			</p>
				
			
		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam 2018</h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>