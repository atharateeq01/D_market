<?php

include ('connection.php');

$sql = "DELETE FROM  order_d_market  WHERE _id = '" . $_GET['pro_id']. " ' ";
if(mysqli_query($conn,$sql))
{
	
    echo "<script>alert('Data is deleted')</script>";
    echo "<script>location.href = 'view_items.php'</script>";
}
else
{
	echo "<script>alert('error')</script>";
    echo "<script>location.href = 'view_items.php'</script>";
}
?>