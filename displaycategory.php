<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM category";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

?>








<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="display.css">
    <link rel="icon" href="img/logo.png" sizes="20x20" type="image/png">
  <script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>

    <title>Display Enquery</title>
  </head>
  <body>
        <div class="container">
      <div class="wrap">
  <div><h1>Royal Bakers Shop</div>
    <div><h5 style="text-transform: uppercase;"><span>Address :-</span> Rajpati Nagar (Khiro Road),Mubarakpur Lalganj </h5></div>
    <div><h5><span>Email :-</span>   royalbakery@gmail.com</h5></div>
    <div><h5><span>Contact number :-</span>    +91 9415453334</h5></div>
</div>
      <div class="one">
        <h2><i class="fas fa-dice-d6"></i> Total No of Category<span><?php echo ($total); ?></span></h2>
        <a href="export.php"><i class="fas fa-file-excel"></i> Export Excel</a>

      </div>
      <div class="tab">
        
      <table class="table table-hover">
  <thead>
    <tr>
     <th scope="col">Id</th>
      <th scope="col">Image</th>
     <th scope="col">Category Name</th>
      <th scope="col">Category Discription</th>
 
      
     
     
    </tr>
  </thead>
  <tbody>
    
<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
 <td>".$result['id']."</td>
<td><img src='".$result['image']."' height='100px' width='100px' /></td>
<td>".$result['name']."</td>
<td>".$result['dis']."</td>


    </tr>
   
  </tbody>";
}
  
}
else
{
  echo "no Record found !";
}

?>
  
  </tbody>
</table>
      </div>
  </div>
    
    
    
<footer><p>Developed by CoolDeveloper</p></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
