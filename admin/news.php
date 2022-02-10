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
	<title>News Form</title>

	<link rel="stylesheet" href="enquery.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="left">
				<form action="" method="POST">
				<div class="heading">
			<h2>News Form</h2>
			<p>Welcome to the Gp Infotec Computer Accademy</p>
			<p>Write Announcements and check it    <a href="index.html" style="text-decoration: none;">  Click here -></a></p>
			
			<img src="bc2.jpg">
			
	
		</div>
        
        
         <input type="text" name="news1" value="" placeholder="Enter your News1">
         <input type="text" name="news2" value="" placeholder="Enter your News2">
         <input type="text" name="news3" value="" placeholder="Enter your News3">
        >
         
             <div class="box"><button type="submit"name="submit" value="Submit">Submit</button></div>
             
     </form>
		</div>
		
		</div>
	</section>
	  
</body>
</html>

<?php

if ($_POST['submit']) {
	

$a = $_POST['news1'];
$b = $_POST['news2'];
$c = $_POST['news3'];



if (  $a!="" && $b!=""&& $c!="" ) {


$query = "INSERT INTO NEWS VALUES ('$a','$b','$c')";
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