
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
			min-height: 390px;
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
			<h2>Multidimentional Array. Tutorial 14</h2>
			
			<p style="font-size:18px;">
			
				<?php
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
			</p>
		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam 2017</h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>