<?php

include ('connection.php');

$sql = "DELETE FROM  admin_login  WHERE id = '" . $_GET['id']. " ' ";
if(mysqli_query($conn,$sql))
{
	
    echo "<script>alert('Data is deleted')</script>";
    echo "<script>location.href = 'admin_view.php'</script>";
}
else
{
	echo "<script>alert('error')</script>";
    echo "<script>location.href = 'view_view.php'</script>";
}
?>