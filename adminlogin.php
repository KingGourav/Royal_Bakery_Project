<?php
include "connection.php";

error_reporting(0);

 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin Form</title>

	<link rel="stylesheet" href="enquery.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="left">
				<form action="" method="POST">
				<div class="heading">
			<h2>Admin User's</h2>
			<p>Welcome to the Royal Bakers</p>
			<p>Check the Admin User report    <a href="index.html" style="text-decoration: none;">  Click here -></a></p>
			
			<img src="bc2.png">
			
	
		</div>
        
         <input type="text" name="userid" value="" placeholder="Enter Your UserId">
         <input type="password" name="password" value="" placeholder="*************">
       
         
             <div class="box"><button type="submit"name="submit" value="Submit">Submit</button></div>
             
     </form>
		</div>
		
		</div>
	</section>
	  
</body>
</html>

<?php

if ($_POST['submit']) {
	

$a = $_POST['userid'];
$b = $_POST['password'];




if ( $a!="" && $b!="") {


$query = "INSERT INTO admin_login VALUES ('$a','$b')";
$data = mysqli_query($conn, $query);

if ($data) {
echo "Data Insert successfully....";


}
else
{
 die("Data not inserted check your form".mysqli_connect_error());
}

}

}

  ?>