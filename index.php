
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
			<h2>Function Arguments and Parameters. Tutorial 17</h2>
			<p>
			f(x) = x^2 + 2x + 4  <br/>
			f(1) = 1^2 + 2.1 + 4  = 7<br/>
			f(2) = 2^2 + 2.2 + 4  = 12<br/>
			f(4) = 4^2 + 2.4 + 4  = 28<br/>
				<?php
					
					function Addition($x,$y){
						$result = $x + $y;
						return "The addition result for ".$x." and ".$y." is ".$result;
					}
					
				echo Addition(5,34)."<br/>";
				echo Addition(50,40)."<br/>";
				echo Addition(5,47)."<br/>";
				echo Addition(15,20)."<br/>";
					
					
					
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