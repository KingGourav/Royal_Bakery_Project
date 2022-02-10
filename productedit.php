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
    <title>Product Form</title>
  </head>
  <body>

    <div class="container">
      
      <form action="" method="GET" >
        <div class="box">
      <div class="left">
       
        <div>
          <label>Product Id</label>
          <input type="text" name="pid" value="<?php  echo $_GET['a']; ?>" placeholder="Enter Your Product Id">
        </div>
         <div>
          <label>Product Name</label>
          <input type="text" name="name" value="<?php  echo $_GET['b']; ?>" placeholder="Enter Your Product Name">
        </div>
         <div>
          <label>Discription</label>
          <input type="text" name="dis" value="<?php  echo $_GET['c']; ?>" placeholder="Enter Your Product Discription">
        </div>
         <div>
          <label>Category</label>
<?php
$query1 = mysqli_query($conn,"select * from category");
$rowcount= mysqli_num_rows($query1);


?>

            <select class="form-select" aria-label="Default select example" name="course" style="margin-top: 1rem;" value="<?php  echo $_GET['d']; ?>">
  <option selected >---Select the course---</option>
  <?php

for ($i=0; $i <= $rowcount ; $i++) { 
  $app = mysqli_fetch_array($query1);


  ?>
  <option value="<?php echo $app["name"]?>"><?php echo $app["name"]?></option>
 <?php

}
?>
</select>

        </div>
         <div>
          <label>Product Price</label>
          <input type="text" name="price" value="<?php  echo $_GET['e']; ?>" placeholder="Enter Your Product Rate">
        </div>
      
      </div>

      <div class="right">
       
      </div></div>
          
  
</div>
<button type="submit" value="Update" name="submit" class="iu">Submit</button>
    </form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>

<?php

if ($_GET['submit']) {
$a1 = $_GET['pid'];
$b2 = $_GET['name'];
$c3 = $_GET['dis'];
$d4 = $_GET['course'];
$e5 = $_GET['price'];





if ($a1!="" && $b2!=""&& $c3!="" && $d4!="" && $e5!="" ) {


$query = "UPDATE product SET name='$b2' , dis='$c3' , category='$d4' , price='$e5' WHERE  pid='$a1' ";
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
  