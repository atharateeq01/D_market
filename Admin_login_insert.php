<?php
include('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];
session_start();
$sql ="SELECT admin_email , admin_password, admin_name, admin_rank FROM admin_login"; 	
$x = (mysqli_query($conn,$sql));
while($row = mysqli_fetch_array ($x) )
{
	if($row['admin_email'] == $email && $row['admin_password'] == $password)
	{
		$_SESSION['rank'] = $row['admin_name'];
		if($row['admin_rank'] == 'Owenr' or $row['admin_rank'] == 'Manager')
		echo "<script>location.href = 'Admin.php'</script>";
		else if($row['admin_rank'] == 'Empolye')
		echo "<script>location.href = 'Admin _empolye.php'</script>";
	}
}
echo "<script>alert('Email and password is incorrect! try again')</script>";
echo "<script>location.href = 'admin_login.php'</script>";
?>