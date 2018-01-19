
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
		/*form{
			
		}
		input[type="text"],select{
			width: 200px;
			height: 36px;
			padding: 4px;
			font-size: 18px;
		}
		input[type="submit"]{
			width: 75px;
			height: 40px;
			background: #9cc59f;
			border: 1px solid black;
			font-size: 18px;
			color: blue;
			border-radius: 5px;
		}
		
		*/
		
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
			<br/>
			<?php
				if($_SERVER['REQUEST_METHOD']=='POST'){
					echo "<pre>";
					print_r($_POST);
					echo "</pre>";
				}
				
			?>
			<form action="" method="post">
				<input type="" name="address" placeholder="Address"/><br/>
				<input type="" name="email"  placeholder="Email"/><br/>
				<input type="submit"  value="SUBMIT"/>
			</form>
			
		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam 2018</h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>