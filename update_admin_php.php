
<?php
include "connection.php";

if(isset($_POST['new']) && $_POST['new']==1)
{
	$id = $_POST['id'];	
	$admin_name = $_POST['admin_name'];
	$admin_email = $_POST['admin_email'];
	$admin_password = $_POST['admin_password'];
	$admin_address = $_POST['admin_address'];
	$admin_phone_no = $_POST['admin_phone_no'];
	$admin_cnic = $_POST['admin_cnic'];
	$admin_dob = $_POST['admin_dob'];
	$admin_qualification = $_POST['admin_qualification'];

	$update="UPDATE admin_login SET id ='".$id."', admin_name='".$admin_name."', admin_email='".$admin_email."', admin_password = '".$admin_password."', admin_address = '".$admin_address."', admin_phone_no = '".$admin_phone_no ."', admin_cnic = '".$admin_cnic."'	, admin_dob = '".$admin_dob ."', admin_qualification = '".$admin_qualification."' where id='".$id."'";
	mysqli_query($conn, $update) or die(mysqli_error());

	echo "<script>alert('Data is Updated')</script>";
echo "<script>location.href = 'admin_view.php'</script>";
}
else
{

echo "<script>location.href = 'home.php'</script>";
}
?>