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
	<title>Enquiry Form</title>

	<link rel="stylesheet" href="enquery.css">
</head>
<body>
	<section>
		<div class="container">
			<div class="left">
				<form action="" method="POST">
				<div class="heading">
			<h2>Enquiry Form</h2>
			<p>Welcome to the Royal Bakers Shop</p>
			<p>Visit my shop    <a href="index.html" style="text-decoration: none;">  Click here -></a></p>
			
			<img src="bc2.png">
			
	
		</div>
        
        
         <input type="text" name="name" value="" placeholder="Enter your Name">
         <input type="email" name="mail" value="" placeholder="Enter Your Mail">
         <input type="text" name="mobile" value="" placeholder="Enter your Contact No">
         <input type="text" name="address" value="" placeholder="Address">
         <input type="text" name="remark" value="" placeholder="Enter your qquery :)">
         
             <div class="box"><button type="submit"name="submit" value="Submit">Submit</button></div>
             
     </form>
		</div>
		
		</div>
	</section>
	  
</body>
</html>

<?php

if ($_POST['submit']) {
	

$a = $_POST['name'];
$b = $_POST['mail'];
$c = $_POST['mobile'];
$d = $_POST['address'];
$e = $_POST['remark'];



if (  $a!="" && $b!=""&& $c!="" && $d!="" && $e!="") {


$query = "INSERT INTO enquery VALUES ('$a','$b','$c','$d','$e')";
$data = mysqli_query($conn, $query);

if ($data) {

	?>
	<script type="text/javascript">
		alert("Data Insert successfully....");
	</script>
<?php


}
else
{
 die("Data not inserted check your form".mysqli_connect_error());
}

}

}

  ?>