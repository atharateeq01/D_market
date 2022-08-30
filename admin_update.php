<?php
		session_start();
		if(!isset ($_SESSION['rank'])) 
		{
			header("Location: home.php");
		}

		?>
	<?php
		include "connection.php";
		$id=$_REQUEST['id'];
		$query = "SELECT * from admin_login where id='".$id."'"; 
		$result = mysqli_query($conn, $query) or die ( mysqli_error());
		$row = mysqli_fetch_assoc($result);
	?>
<!DOCTYPE html>
<html long= "en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-compatiable" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>D market center</title>
</head>
<body style="background-color: black;">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
		<a href="home.php"  class="navbar-brand "style="color: red; font-size: 30px; font-family: Lucida Handwriting; "> D Market </a>
		<ul class="navbar-nav "  style="color: white; font-size: 20px">
		<li class="nav-item " ><a href="home.php" class="nav-link">Home</a></li>
		<li class="nav-item" ><a href="#" class="nav-link" data-toggle="modal" data-target="#mymodal">About</a> 
		<div class="modal" id="mymodal">
		<div class="modal-dialog">
		<div class="modal-content" style="background-color: black; color: red;">
			<div class="modal-header">
			<h4 class="modal-title">About</h4>		
			</div>
		<div class="modal-body">
		<h1>Name</h1>
		<h4 style="text-align: center; color: white;">Athar Ateeq</h4>
		<h1>SAP ID</h1>
		<h4 style="text-align: center; color: white;">14206</h4>
		<h1>Semester</h1>
		<h4 style="text-align: center; color: white;">4th (section B)</h4>
		<h1>Department</h1>
		<h4 style="text-align: center; color: white;">BSCS</h4>
		</div>
			<div class="modal-footer">
			<button type="button" class="close " data-dismiss="modal"><p style="color: white;">Back</p></button>
		</div>		
		</div>
	</div></li>
		<li class="nav-item" ><a href="#bottom" class="nav-link">Contact</a></li>
	</div></li></ul>
		<ul class="navbar-nav ml-auto " style="color: blue; font-size: 20px; float: left;">
			<li class="nav-item" ><a href="session_destory.php" class="nav-link">log out </a></li>
		</ul>			
			</nav>
	<h1 style="color: gray;"> <marquee> You want it, we got it </marquee> </h1>
	<div class="container" >
		<div class="row">
			<div class="col-6">
				<h1 style="color: red; font-size: 50px; text-align: left;">Add new admin </h1><br>
				<p style="color: white; "> “When colors mix they become muddy and messy. But when they all blend together, the final result is the color that wins against all others… Black!” – Ittetsu Takeda </p>
			</div>	
			<div class="col-6">
				<div class="row">
					<div class="col-12" style="height: 10px;"></div>
					<h1 style="color: red; font-size: 40px; text-align: center;"> Fill this form</h1>
					<div class="col-12" style="height: 30px;"></div>

					<form action="update_admin_php.php" method="post">
						<input type="hidden" name="new" value="1" />
						<input type="hidden" name="id" value="<?php echo $row['id'];?>"  />

					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin name</h1><br>
					</div>
					<div class="col-5">
						<input type="text" name="admin_name"  required value="<?php echo $row['admin_name'];?>" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin E-mail</h1>
					</div>
					<div class="col-5">
						<input type="email" name="admin_email" required value="<?php echo $row['admin_email'];?>" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin password</h1>
					</div>
					<div class="col-5">
						<input type="password" name="admin_password" required value="<?php echo $row['admin_password'];?>" style="font-size: 20px; width: 300px;" >
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin address</h1>
					</div>
					<div class="col-5">
						<input type="text" name="admin_address" required value="<?php echo $row['admin_address'];?>" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin phone number</h1>
					</div>
					<div class="col-5">
						<input type="text" name="admin_phone_no" required value="<?php echo $row['admin_phone_no'];?>" style="font-size: 20px; width: 300px;" >
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin CNIC</h1>
					</div>
					<div class="col-5">
						<input type="text" name="admin_cnic" required value="<?php echo $row['admin_cnic'];?>"style="font-size: 20px; width: 300px;" >
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin Date of brith</h1>
					</div>
					<div class="col-5">
						<input type="date" name="admin_dob" required value="<?php echo $row['admin_dob'];?>" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Admin qualification</h1>
					</div>
					<div class="col-5">
						<input type="text" name="admin_qualification" required value="<?php echo $row['admin_qualification'];?>" style="font-size: 20px; width: 300px;">
					</div>
					
					<div class="col-12"> 	
					<div class="col-4"><input class="btn btn-primary" type="submit" value="update">	</div><br>
					</div>
				</form>
			
				</div>		
				</div>
			</div>
		</div>
	</div>
	<hr style="background-color: white;">
	<div class="container-fluid" >
		<div class="row"> 
			<div class="col-4">
				<h5 style="color: red; "> Disclaimer </h5>
				<h6 style="color: white;"> This is a project of mine so don't take it seriously. BTW, its for market where everyone is able to use computer ans its stuff and I used my handfull of knowledge I hope you like it.</h6>
				<p style="color: darkgray;">&copy; 2020 Waves. All right reserved <p>
			</div>

			<div class="col-4">
				<h5 style="color: red; "> Contact </h5>
				<h5 style="color: red; "> Address </h5>
				<h6 style="color: white;"> Kot Radha Kishan, Distric Kasur, Punjab Pakistan .</h6>
				<h5 style="color: red; "> Email </h5>
				<h6 style="color: white;"> <a href="atharateeq01@gmail.com"> Athar Ateeq </a></h6>
				<h5 style="color: red; "> Phone # </h5>
				<h6 style="color: white;">+923478448101</h6>

			</div>

			<div class="col-4">
				<h5 style="color: red; "> Fellow us on </h5>
				<button type="button" class="btn btn-primary" ><a href="https://www.facebook.com/AtharAteeq100/"" style="color:  white;">Facebook</a></button><br> <br>
				<button type="button" class="btn btn-danger"><a href=""atharateeq01@gmail.com" style="color: white;">Gamil</a></button><br> <br>
				<button type="button" class="btn btn-info"><a href="https://www.instagram.com/atharateeq01/?hl=en" style="color: white;">Instagram</a></button><br> <br>
				<button type="button" class="btn btn-primary" ><a href="https://twitter.com/AtharAteeq01" style="color:  white;">twitter</a></button><br><br>
			</div>
</div>
<a name="bottom">		
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


