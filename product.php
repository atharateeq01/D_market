<?php
session_start();
if(!isset ($_SESSION['buyer_id'])) 
{
	header("Location: buyer.php");
}
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
		<a href="session_destory.php"  class="navbar-brand "style="color: red; font-size: 30px; font-family: Lucida Handwriting; "> D Market </a>
		<ul class="navbar-nav "  style="color: white; font-size: 20px">
		<li class="nav-item " ><a href="session_destory.php" class="nav-link">Home</a></li>
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
		<h4 style="text-align: center; color: white;">3rd (sectio B)</h4>
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
			 <li class="nav-item" ><a href="view_cart.php" class="nav-link">View cart </a></li>
		</ul>			
			</nav>
	<h1 style="color: gray;"> <marquee> You want it, we got it</marquee> </h1>
	<div class="container" >
		<div class = 'row'>
			<div class="col-sm-12">
				<h1 style="color: red; font-size: 40px; text-align: center;">Buy what you want</h1>
			</div>
			</div>
		</div></div>
		<div class="container" >
		<div class="row">
			
			<?php
			$cat = 'nil';

				include ('connection.php');
				$sql ="SELECT * FROM product ORDER BY pro_cat ";
				$x = (mysqli_query($conn,$sql));
				while($row=mysqli_fetch_array ($x) ){
					if($cat != $row['pro_cat'] )
					{?>
						<br>
						<div class="col-sm-12">
						<h1 style="color: red; font-size: 30px; text-align: left;"><?php echo $row['pro_cat'];?></h1></div>
					<?php }  $cat = $row['pro_cat']
			?>				
				<div class="col-sm-4">
					<br>
				<button style="border-style: double; border-color: gray; background-color: black; color: gray; height: 550px;"><h1 style="text-align: center;"> <?php echo $row['pro_name'];?></h1> 
					<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['pro_pic']) .'" style="width:300px; height:200px;"/>'?><br><h1 style="font-size: 20px;">About: <?php echo $row['pro_discrip'];?></h1><br> <h1 style="font-size: 20px;">Rs. <?php echo $row['pro_price'];?></h1><br><a href="add_to_cart.php?pro_id=<?php echo $row['pro_id'];?>">Add to cart</a></button>
			</div>
			
	<?php
		}
	?>
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
				<button type="button" class="btn btn-primary" ><a href="https://twitter.com/AtharAteeq01" style="color:  white;">twitter</a></button>
			</div>
</div>
<a name="bottom">	
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>