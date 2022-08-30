<?php
include('connection.php');

$buyer_name = $_POST['buyer_name'];
$buyer_email = $_POST['buyer_email'];
$buyer_address = $_POST['buyer_address'];
$buyer_phone_no = $_POST['buyer_phone_no'];
$buyer_cnic = $_POST['buyer_cnic'];
session_start();
$submit = "INSERT INTO buyer_login( buyer_name, buyer_email, buyer_address, buyer_phone_no, buyer_cnic) VALUES('$buyer_name', '$buyer_email', '$buyer_address', '$buyer_phone_no', '$buyer_cnic')";
if(mysqli_query($conn, $submit))
{
	$id = 0;
	$sql = "SELECT id FROM buyer_login ";
	$x = (mysqli_query($conn,$sql));
	while($row=mysqli_fetch_array ($x) )
	{
		if($id < $row['id'] )
		$id = $row['id'];
	}
	$_SESSION['buyer_id'] = $id;
	$_SESSION['buyer_name'] = $buyer_name;
	$_SESSION['buyer_cnic'] = $buyer_cnic;
	echo "<script>location.href = 'product.php'</script>";
}
else 
{
	echo "<script>alert('Incomplete data! try again')</script>";
	echo "<script>location.href = 'buyer.php'</script>";
}
