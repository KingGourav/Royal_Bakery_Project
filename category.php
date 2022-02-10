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
<link rel="stylesheet" type="text/css" href="category.css">
    <title>Category page</title>

<script>
      window.onload=function()
      {
        document.getElementById('load1').style.display="none";
        document.getElementById('tom1').style.display="block";
      
      }
    </script>
    <style>
      .tom
      {
        display: none;
      }
      .load
      {
        display: flex;
        align-items: center;
        justify-content: center;

      }

    </style>


  </head>
  <body class="bg-light">
     <div class="load" id="load1">
      <img src="loader.gif">
    </div>
    
    <div class="tom" id="tom1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: var(--shadow);">
  <div class="container">
    <a class="navbar-brand" href="#">RoyalBakers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="enquery.php">Enquery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/channel/UCV0C0oewU-Jnsg58nz4CX_Q">Youtube</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style >

</style>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 1rem;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>All type of Cakes are available</h5>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>All type of Breads are available</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Get your perfect ordere</h5>
   
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="bg-light">
<div class="container" style="margin-top: 5rem;background: #f9f9f9;">
 <div class="box">
  <form action="category.php" method="GET">
   <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>"  placeholder="Search what do you want under ther category"><button class="btn" type="submit" value="Submit" style="background:var(--primary);color: #fff;font-weight: bold;padding: 0.7rem 0.5rem;box-shadow: var(--shadow);">Search</button>
 </form>
  <?php
if (isset($_GET['search'])) {
$se = $_GET['search'];

$query = "SELECT * FROM category WHERE CONCAT(name,dis) LIKE '%$se%'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


}
else
{
  
}







      ?>
 </div>
 <div class="base">
 <?php
if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {

 ?>

  <div class="card1">
    <img src="<?php echo $result["image"] ; ?>">
    <h5><?php echo $result["name"] ; ?></h5>
    <p><?php echo $result["dis"] ; ?></p>
    <?php echo ("<a  href='product1.php?a=$result[name]'>Click here</a>")
    ?>

  </div>



<?php

}
}
else
{
  echo "no Record found !";
}

?>
</div>
  </div>

</section>
</div>

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