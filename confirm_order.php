<?php
session_start();
include('connection.php');

$buyer_id = $_SESSION['buyer_id'];
$time = date("Y/m/d");

$submit = "INSERT INTO order_D_market( buyer_id, at) VALUES('$buyer_id', '$time')";
if(mysqli_query($conn, $submit))
{
	session_destroy();
	echo "<script>location.href = 'buyer.php'</script>";
}
else 
{
	echo "<script>alert('user name and password is incorrect! try again')</script>";
	echo "<script>location.href = 'view_cart.php'</script>";
}


	

?>
