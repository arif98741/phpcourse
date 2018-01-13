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
			<h2>For Loop, While Loop, Do While Loop. Tutorial 11</h2>
			
			<p style="font-size:18px;">
			
				<?php
				
					$data = array(
						"database","programming","datastructure","algorithm","electronics",
						"fundametal","oriented","infratructure"
					);
					
					$sen = "database is the system of saving data in a sequencial way";
					$sen_expl = explode(" ",$sen);
					
					
					for($i=0; $i<8; $i++){
						$sen_split = str_split($sen_expl[$i]);
						$data_split = str_split($data[$i]);
						if($sen_split[$i] == $data_split[$i])
						{
							echo $sen_split[$i]." ";
						}
							
					}
					
					$d = "t";
					if(ctype_upper ($d))
					{
						echo "right";
					}else{
						echo "false";
					}
					

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