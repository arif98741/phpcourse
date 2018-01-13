
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
		table{
			width: 100%:
			margin: auto;
			border-collapse: collapse;
		}
		td{
			padding: 5px;
		}
		
		input[type="text"],select{
			width:300px;
			height: 40px;
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
			
			<?php 
				if($_SERVER['REQUEST_METHOD'] == 'GET'){
					
				
					$user = $_GET['user'];
					$address = $_REQUEST['address'];
					$email = $_GET['email'];
					$gender = $_GET['gender'];
					
					echo $user."<br/>";
					echo $address."<br/>";
					echo $email."<br/>";
					echo $gender."<br/>";
				}
			
			?>
			
			<form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
				<table>
					<tbody>
						<tr>
							<td>Enter Your Name</td>
							<td><input type="text" name="user" placeholder="Enter Your Name"/></td>
						</tr>
						<tr>
							<td>Enter Your Address</td>
							<td><input type="text" name="address" placeholder="Enter Your Address"/></td>
						</tr>
						<tr>
							<td>Enter Your Email</td>
							<td><input type="text" name="email" placeholder="Enter Your Email"/></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								<select name="gender" id="">
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Submit"/></td>
						</tr>
						
					</tbody>
				</table>
			
			</form>
				
			
		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam 2018</h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>