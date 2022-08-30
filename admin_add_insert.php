<?php
include('connection.php');

$admin_name = $_POST['admin_name'];
$admin_email = $_POST['admin_email'];
$admin_password = $_POST['admin_password'];
$admin_address = $_POST['admin_address'];
$admin_phone_no = $_POST['admin_phone_no'];
$admin_cnic = $_POST['admin_cnic'];
$admin_dob = $_POST['admin_dob'];
$admin_qualification = $_POST['admin_qualification'];
$admin_rank = $_POST['admin_rank'];
$submit = "INSERT INTO admin_login( admin_name, admin_email, admin_password, admin_address, admin_phone_no, admin_cnic, admin_dob, admin_qualification, admin_rank) VALUES('$admin_name', '$admin_email', '$admin_password', '$admin_address', '$admin_phone_no', '$admin_cnic', '$admin_dob', '$admin_qualification', '$admin_rank')";
if(mysqli_query($conn, $submit))
{
	echo "<script>location.href = 'admin.php'</script>";
}
else 
{
	echo "<script>alert('user name and password is incorrect! try again')</script>";
}
?>