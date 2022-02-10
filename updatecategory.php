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
    <title>Category Form</title>
  </head>
  <body>

    <div class="container">
      
      <form action="" method="GET" >
        <div class="box">
      <div class="left">
       
        <div>
          <label> Id</label>
          <input type="text" name="id" value="<?php  echo $_GET['a']; ?>" placeholder="Enter Your Product Id">
        </div>
         <div>
          <label>Category Name</label>
          <input type="text" name="name" value="<?php  echo $_GET['b']; ?>" placeholder="Enter Your Product Name">
        </div>
         <div>
          <label>Discription</label>
          <input type="text" name="dis" value="<?php  echo $_GET['c']; ?>" placeholder="Enter Your Product Discription">
        </div>
        
         
      
      </div>

      <div class="right">
       
      </div></div>
          <button type="submit" value="Update" name="submit" class="iu">Submit</button>
    </form>
  
</div>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

<?php

if ($_GET['submit']) {
$a1 = $_GET['id'];
$b2 = $_GET['name'];
$c3 = $_GET['dis'];






if ($a1!="" && $b2!=""&& $c3!=""  ) {


$query = "UPDATE category SET name='$b2' , dis='$c3' WHERE  id='$a1' ";
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
  