<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "market";

$conn = mysqli_connect($host, $username, $password, $dbname);

if($conn)
{
	}
else
{
	echo "connection error";
}
?>