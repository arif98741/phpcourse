<?php 
					
					dfphpinfo(); die;
					
					
				?>
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
			<h2> PHP XDebug - Tutorial 32 </h2>
			<p>
			
			<?php
				//at first copy whole page from phpinfo()

				//and paste it to https://xdebug.org/wizard.php
				// download dll file and paste it to xampp/php/ext
				//open php.ini from xampp/php and paste the below code at bottom.
				/*

				[XDebug]
				zend_extension = C:\xampp\php\ext\php_xdebug-2.6.1-7.2-vc15.dll
				xdebug.default_enable=1
				xdebug.remote_enable=1
				xdebug.remote_host=127.0.0.1
				xdebug.profile_enable=1
				xdebug.idekey=PHPSTROM
				*/

				//later change zend_extension path from xdebug page 
				//https://gist.github.com/arif98741/456cc8fadbe114b122fb2dcd9271f149
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