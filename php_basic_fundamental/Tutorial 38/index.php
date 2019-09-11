<?php require 'connection.php'; ?>
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
			border-radius: 4px 4px 0px 0px;
		}
		.content{
			min-height: 400px;
			padding: 5px;
			
		}
		
		input[type="text"],input[type="email"],input[type="password"],select{
			/*width: 200px;
			height: 36px;*/
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
		.content h2{margin:0px; text-align:center; padding:5px; font-family: 'Arial';}
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
			<h2> PHP Insert Data Using PDO Part 3- Tutorial 38 </h2>
			<hr>
			<?php

			if (isset($_POST['insertdata'])) {
				$con = connect();

				$name 		= $_POST['name'];
			    $sex 		= $_POST['sex'];
			    $username 	= $_POST['username'];
			    $password 	= $_POST['password'];
			    $mobile 	= $_POST['mobile'];
			    $email 		= $_POST['email'];
			    $designation = $_POST['designation'];
			    $address 	= $_POST['address'];

			    $sql = "insert into usertable(name,sex,username,password,mobile,email,address,designation) values(:name,:sex,:username,:password,:mobile,:email,:address,:designation)";
				$statement = $con->prepare($sql);
				$statement->bindParam(":name",$name);
				$statement->bindParam(":sex",$sex);
				$statement->bindParam(":username",$username);
				$statement->bindParam(":password",$password);
				$statement->bindParam(":mobile",$mobile);
				$statement->bindParam(":email",$email);
				$statement->bindParam(":address",$address);
				$statement->bindParam(":designation",$designation);
				$status = $statement->execute();
				if ($status == TRUE) {
					echo 'Data Inserted Successfully';
				}else{
					echo 'Data Insert Failed';
				}

			}
			
		
			?>

			<form action="" method="post">
				<label for="">Name</label><br>
				<input type="text" name="name"> <br>

				<label for="">Sex</label><br>
				<select name="sex" id="">
					<option value="" disabled="" selected="">Select Sex</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select><br>

				<label for="">Username</label><br>
				<input type="text" name="username"> <br>

				<label for="">Password</label><br>
				<input type="password" name="password"> <br>

				<label for="">Mobile</label><br>
				<input type="text" name="mobile"> <br>

				<label for="">Email</label><br>
				<input type="email" name="email"> <br>

				<label for="">Designation</label><br>
				<input type="text" name="designation"> <br>

				<label for="">Address</label><br>
				<textarea name="address" id="" cols="30" rows="4"></textarea>

				<button type="submit" name="insertdata">Insert</button>

			</form>
			

		</div>
		<div class="footer">
			<h1>Instructor Ariful Islam <?php echo date('Y'); ?></h1>
			<p>&copy; Copyright <a href="https://www.youtube.com/channel/UCIoDbAdMtNye5uR3riRZZsA" target="_blank">Ariful Islam</a></p>
		</div>
	</div>
</body>
</html>