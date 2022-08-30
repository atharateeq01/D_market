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
		<li class="nav-item" ><a href="#go" class="nav-link">Myself</a></li>
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
			<li class="nav-item" ><a href="home.php" class="nav-link">Back </a></li>
		</ul>
			</nav>
	<h1 style="color: gray;"> <marquee> You want it, we got it </marquee> </h1>
	<div class="container" >
		<div class="row">
			<div class="col-6">
				<h1 style="color: red; font-size: 50px; text-align: left;">Let's buy</h1><br>
				<p style="color: white; "> “In this world there are very few people<br> who actually trust each other!” – Ittetsu Takeda <br><br> And you can trust us - D market</p>
			</div>	
			<div class="col-6">
				<div class="row">
					<div class="col-12" style="height: 10px;"></div>
					<h1 style="color: red; font-size: 40px; text-align: center;"> Fill this form</h1>
					<div class="col-12" style="height: 30px;"></div>
					<form action="buyer_insert.php" method="post">
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Buyer name</h1><br>
					</div>
					<div class="col-5">
						<input type="text" name="buyer_name"  placeholder="Enter buyer name" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Buyer E-mail</h1>
					</div>
					<div class="col-5">
						<input type="email" name="buyer_email" value="" placeholder="Enter buyer email" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Buyer address</h1>
					</div>
					<div class="col-5">
						<input type="text" name="buyer_address" value="" placeholder="Enter buyer address" style="font-size: 20px; width: 300px;">
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Buyer phone number</h1>
					</div>
					<div class="col-5">
						<input type="text" name="buyer_phone_no" value="" placeholder="Enter buyer phone number" style="font-size: 20px; width: 300px;" >
					</div>
					<div class="col-12">
						<h1 style="color: white; font-size: 30px; text-align: left;">Buyer CNIC</h1>
					</div>
					<div class="col-5">
						<input type="text" name="buyer_cnic" value=""  placeholder="Enter buyer CNIC"style="font-size: 20px; width: 300px;" >
					</div>
					<div class="col-12"> 	
					<div class="col-4"><input class="btn btn-primary" type="submit" value="Submit">	</div>
					</div>
				</form>
					
				</div>		
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-sm-12"><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
		<a name="go">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<h1 style="text-align: left; color: gray;  font-family:  Fantasy Papyrus; font-size: 70px;  ">About</h1>
		</div>
		<</div>
		<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<h1 style="text-align: center; color: red;  font-family: Lucida Handwriting;  ">At D market.com, we believe<br> everyone deserves to have a<br>best and we got best.
			</h1>
		</div>
		</div>
	</div>
		<br><br><br><br>

		<div class="row">
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-2">
				<button style="border-style: double; border-color: gray; background-color: black; color: gray;"><h1 style="text-align: center;"> Designer</h1> 
					<img src="athar.jpeg" style="border-radius: 100%; width: 200px; height: 200px; align-items: center;"><br> I am student of Riphah international University and I'm Enroll in BC computer science. This website is my project of 4th semester and I'm doing my best to perform well. wish me luck </button>
			</div>
			<div class="col-sm-1">
				
			</div>

			<div class="col-sm-2">
				<button style="border-style: double; border-color: gray; background-color: black; color: gray;"><h1 style="text-align: center;"> Instructor</h1> 
					<img src="sir.jpeg" style="border-radius: 100%; width: 200px; height: 200px; align-items: center;"><br>  Education is our passport to the future, for tomorrow belongs to the people who prepare for it today. I am not a teacher, but an awakener. The art of teaching is the art of assisting discovery. </button>

			</div>
			<div class="col-sm-1">
				
			</div>

			<div class="col-sm-2">
				<button style="border-style: double; border-color: gray; background-color: black; color: gray;"><h1 style="text-align: center;"> Lectureare</h1> 
					<img src="sir1.jpg" style="border-radius: 100%; width: 200px; height: 200px; align-items: center;"><br>  Education is our passport to the future, for tomorrow belongs to the people who prepare for it today. I am not a teacher, but an awakener. The art of teaching is the art of assisting discovery. </button>

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