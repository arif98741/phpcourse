<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PHP Online Course For Learning</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
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
			font-family: 'Josefin Sans', sans-serif;
		}
		.content{
			min-height: 440px;
			padding: 5px;
			
		}
		
		input[type="text"],select{
			width: 200px;
			height: 36px;
			padding: 4px;
			font-size: 18px;
			margin: 4px;
		}
		input[type="submit"]{
			width: 75px;
			height: 40px;
			background: #9cc59f;
			border: 1px solid black;
			font-size: 18px;
			color: blue;
			border-radius: 5px;
			cursor: pointer;
		}
		
		
		
		.content p{font-size:19px; font-family: 'Hind', sans-serif;}
		.content h2{margin:0px; text-align:center; padding:5px; font-family: 'Josefin Slab', serif;}
		.header h1, .header p, .footer h1, .footer p{margin:0px; padding: 5px;}
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
			<h2> PHP Magic Constant - Tutorial 31 </h2>
			<p>
			
				<?php 
				//Tutorial 31
					
					/*
					echo __LINE__;
					echo __FILE__;
					echo __DIR__;
					
					function test()
					{
						return "we are working on <strong>".__FUNCTION__."</strong> function";
					}
					
					echo test();
					
					
					class Student{
						
						public function __construct()
						{
							echo "we are now in ".__METHOD__." method";
						}
					}
					
					$obj = new Student();
					
					*/
					
					
					
				?>
			
			</p>
			
				
		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam <?php echo date('Y'); ?></h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA" target="_blank">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>