<?php 
include 'connection.php';
error_reporting(0);

?>





<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="productform.css">
    <title>Account Details</title>
  </head>
  <body>

    <div class="container">
      
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="box">
      <div class="left">
       
        <div>
          <label> Id</label>
          <input type="text" name="id" value="" placeholder="Enter  Id">
        </div>
         <div>
          <label>Date</label>
          <input type="date" name="date" value="" placeholder="Enter Date ">
        </div>
         <div>
          <label>Debit</label>
          <input type="text" name="debit" value="" placeholder="Enter Total Incoming Amount">
        </div>
         <div>
          <label>Credit</label>
  <input type="text" name="credit" value="" placeholder="Enter Total Outgoing Amount">

        </div>
         <div>
          <label>Any Remarks</label>
          <input type="text" name="remark" value="" placeholder="Enter Short Remarks">
        </div>
      
      </div>

      <div class="right">
        <div><img src="apps.png" style="width: 100%;height: auto;">
       
      </div></div>
          
  
</div>
<button type="submit" value="Submit" name="submit" class="iu">Submit</button>
    </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

<?php

if ($_POST['submit']) {
$a = $_POST['id'];
$b = $_POST['date'];
$c = $_POST['debit'];
$d = $_POST['credit'];
$e = $_POST['remark'];





if ($a!="" && $b!=""&& $c!="" && $d!="" && $e!="" ) {


$query = "INSERT INTO account VALUES ('$a','$b','$c','$d','$e')";
$data = mysqli_query($conn, $query);

if ($data) {
  ?>
<script type="text/javascript">
  alert("data insert successfully");
</script>


<?php
}
else
{
 die("data not inserted check your form".mysqli_connect_error());
}

}

}

  ?>

  <style>
  	@media(max-width: 800px)
  	{
  		img
  		{
  			display: none;
  		}
  	}
@media(max-width: 500px)
{
	button
	{
		width: 100% !important;
	}
}

  </style>