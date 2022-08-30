<?php
		session_start();
		if(!isset ($_SESSION['rank'])) 
		{
			header("Location: home.php");
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
			 <li class="nav-item" ><a href="admin.php" class="nav-link">Back </a></li>
		</ul>			
			</nav>
	<h1 style="color: gray;"> <marquee> You want it, we got it</marquee> </h1>
	<div class="container-fluid" >
		<div class = 'row'>
			<div class="col-sm-12">
				<h1 style="color: red; font-size: 40px; text-align: center;"> Sold product</h1></div>
					

	<?php

		include ('connection.php');

			$cat = 'nil';

				$aaa ="SELECT * FROM sold ORDER BY confirm_at ";
				$bbb = (mysqli_query($conn,$aaa));
				while($ccc=mysqli_fetch_array ($bbb))
				{
					$buyer_id = $ccc['buyer_id'];
			

					?>
					<table border="2" style=" margin-left: auto; margin-right: auto; color: white; font-size: 30px; border: 5px; text-align: center; border-color: red;">
		<tr style="">
			<th>Buyer name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Phone No</th>
			<th>CNIC</th>
			<th>Product name</th>
			<th>Product quntity</th>
			<th>Order by buyer </th>
			<th>Order Confirm </th>
		</tr>

	<?php
					$ddd ="SELECT * FROM add_to_cart where buyer_id = $buyer_id ";
					$eee = (mysqli_query($conn,$ddd));
					while($fff=mysqli_fetch_array ($eee))
					{
					$pro_id = $fff['pro_id'];
					$how_many = $fff['how_many'];

					$fff ="SELECT * FROM buyer_login where id = $buyer_id ";
					$ggg = (mysqli_query($conn,$fff));
					while($hhh=mysqli_fetch_array ($ggg))
					{
	
						
					$iii ="SELECT * FROM product where pro_id = $pro_id ";
					$jjj = (mysqli_query($conn,$iii));
					while($kkk=mysqli_fetch_array ($jjj))
					{	?>
		<tr>
			<td><?php echo $hhh['buyer_name'];?></td>
			<td><?php echo $hhh['buyer_email'];?></td>
			<td><?php echo $hhh['buyer_address'];?></td>
			<td><?php echo $hhh['buyer_phone_no'];?></td>
			<td><?php echo $hhh['buyer_cnic'];?></td>
			<td><?php echo $kkk['pro_name'];?></td>
			<td><?php echo $how_many;?></td>
			<td><?php echo $ccc['order_at'];?></td>
			<td><?php echo $ccc['confirm_at'];?></td>
		</tr>
	<?php
		}}}
		?> 
	</table><table>
		<div class="col-sm-12"><hr style="background-color: white; height: 5px;"><br></div>
		<?php
}
?>

	<hr style="background-color: white;">
<?php
	
	?>
			</table>
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
				<button type="button" class="btn btn-primary" ><a href="https://twitter.com/AtharAteeq01" style="color:  white;">twitter</a></button>
			</div>
</div>
<a name="bottom">	
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>