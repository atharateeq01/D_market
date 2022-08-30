<?php
session_start();
include('connection.php');

$pro_id = $_POST['pro_id'];
$buyer_id = $_POST['buyer_id'];
$how_many = $_POST['how_many'];

$sql ="SELECT * FROM product where pro_id = $pro_id ";
$x = (mysqli_query($conn,$sql));
while($row=mysqli_fetch_array ($x) )
{
	if($row['pro_qun'] >= $how_many )
	{
		$me ="UPDATE product SET pro_qun = (pro_qun - '$how_many') where pro_id = $pro_id  ";
		mysqli_query($conn,$me) ;
	
		$submit = "INSERT INTO add_to_cart( buyer_id, pro_id, how_many) VALUES('$buyer_id', '$pro_id', '$how_many')";
		if(mysqli_query($conn, $submit))
		{
			echo "<script>location.href = 'product.php'</script>";
		}
		else 
		{
			echo "<script>alert('user name and password is incorrect! try again')</script>";
		}
	}
	else
	{
		echo "<script>alert('Do not have this much itmes!')</script>";
		echo "<script>location.href = 'product.php'</script>";
	}
}
	

?>
