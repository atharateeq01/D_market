<?php
include('connection.php');
if (count($_FILES) > 0){
	 if (is_uploaded_file($_FILES['pro_pic']['tmp_name'])){
	$pro_name = $_POST['pro_name'];
	$pro_cat = $_POST['pro_cat'];
	$pro_qun = $_POST['pro_qun'];
	$pro_price = $_POST['pro_price'];
	$pro_discrip = $_POST['pro_discrip'];

	$pro_pic = addslashes(file_get_contents($_FILES['pro_pic']['tmp_name']));

	$submit = "INSERT INTO product( pro_name, pro_cat, pro_qun, pro_price, pro_discrip, pro_pic) VALUES('$pro_name','$pro_cat', '$pro_qun', '$pro_price', '$pro_discrip', '$pro_pic' )";
	if(mysqli_query($conn, $submit))
	{
		echo "<script>location.href = 'admin.php'</script>";
	}
	else 
	{
		echo "<script>alert(' try again')</script>";
		echo "<script>location.href = 'add_items.php'</script>";
	}
}}
?>
