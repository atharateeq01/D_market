<?php
session_start();
include('connection.php');

$cart_id = $_REQUEST['cart_id'];
$buyer_id = $_SESSION['buyer_id'];


$sql ="SELECT * FROM add_to_cart where cart_id = $cart_id";
$x = (mysqli_query($conn,$sql));
while($row=mysqli_fetch_array ($x) )
{
	$how_many =  $row['how_many'];
	$pro_id = $row['pro_id'];
	$me ="UPDATE product SET pro_qun = (pro_qun + $how_many)  where pro_id = $pro_id ";
	mysqli_query($conn,$me);
}
$submit = "DELETE FROM  add_to_cart  WHERE cart_id = $cart_id";
if(mysqli_query($conn, $submit))
{
	echo "<script>location.href = 'view_cart.php'</script>";
}
else 
{
	echo "<script>alert('user name and password is incorrect! try again')</script>";
}
?>


