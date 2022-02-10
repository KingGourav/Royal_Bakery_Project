<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "institute";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn) {
	// echo "connection ok";
}
else
{
	die("connection failed".mysqli_connect_error());
}


?>