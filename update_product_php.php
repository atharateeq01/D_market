
<?php
include "connection.php";

if(isset($_POST['new']) && $_POST['new']==1)
{
	$pro_id = $_POST['pro_id'];	
	$pro_name = $_POST['pro_name'];
	$pro_cat = $_POST['pro_cat'];
	$pro_qun = $_POST['pro_qun'];
	$pro_price = $_POST['pro_price'];
	$pro_discrip = $_POST['pro_discrip'];

	$update="UPDATE product SET pro_id ='".$pro_id."', pro_name='".$pro_name."', pro_cat='".$pro_cat."', pro_qun = '".$pro_qun."', pro_price = '".$pro_price."', pro_discrip = '".$pro_discrip ."' WHERE pro_id='".$pro_id."'";
	mysqli_query($conn, $update) or die(mysqli_error());

	echo "<script>alert('Data is Updated')</script>";
echo "<script>location.href = 'view_items.php'</script>";
}
else
{

echo "<script>location.href = 'home.php'</script>";
}
?>