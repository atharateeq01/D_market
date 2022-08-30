<?php

include ('connection.php');

$buyer_id = $_GET['buyer_id'];

$aaa ="SELECT * FROM order_d_market where buyer_id = $buyer_id ";
$bbb = (mysqli_query($conn,$aaa));
while($ccc=mysqli_fetch_array ($bbb))
{
	$order_at =  $ccc['at'];
	$confirm_order = date("Y/m/d");
	$order_id = $ccc['order_id'];


	$submit = "INSERT INTO sold( buyer_id, order_at, confirm_at) VALUES('$buyer_id','" . $ccc['at']. "', '$confirm_order')";
	if(mysqli_query($conn, $submit))
	{

	$sql = "DELETE FROM  order_d_market  WHERE order_id = $order_id ";
	if(mysqli_query($conn,$sql))
	{

		echo "<script>alert('Order is confirm ')</script>";
		echo "<script>location.href = 'view_pending.php'</script>";
	}
	else
	{
		echo "<script>alert('error')</script>";
		echo "<script>location.href = 'view_items.php'</script>";
	}
}
}
?>