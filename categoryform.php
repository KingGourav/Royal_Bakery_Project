<?php
include "connection.php";
error_reporting(0);


 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category Creations</title>
  </head>
  <body>
    <div class="container">
      <h4>Category Details</h4>
      <form action="" method="POST" enctype="multipart/form-data">
                <div>
                  <label>Category Name</label>
                  <input type="text" name="name" value="" placeholder="Enter Category Name">
                </div>
                <div>
                  <label>Category Description</label>
                  <input type="text" name="dis" value="" placeholder="Enter Category Description">
                </div>
                <div>
                   <input type="file" name="uploadfile" value="" >
                </div>
                <button  name="submit" value="Submit" type="submit">Submit</button>
                <a href="#">Get Data</a>
    </form>
   </div> 


<?php

if ($_POST['submit']) {
$a = $_POST['name'];
$b = $_POST['dis'];




$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "imgdata/".$filename;
move_uploaded_file($tempname, $folder);

if ($a!="" && $b!="" && $folder!="") {


$query = "INSERT INTO category (name, dis,image) VALUES ('$a','$b','$folder')";
$data = mysqli_query($conn, $query);

if ($data) {
  ?>

<script type="text/javascript">
  alert( "data insert successfully....");
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

<style>
  :root 
{
  --text:#777777;
  --primary:#E2004F ;
  --secondary:#232838;
  --ternary:#6C6C6C;
  --danger:#FE4545;
  --pure:#FEFEFE;
  --light:#F0F0F0;
  --haven:#FFFFFF;
  --footer:#20333F;
  --shadow:0px 10px 30px rgba(118,85,225,0.3);
  --box-shadow:0px 10px 30px rgba(57,56,61,0.205);
  --gradient:linear-gradient(90deg,#4458dc 0%,#854fee 100%);
}


 body
 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url(form.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 } 
 .container
 {
  box-shadow:var(--box-shadow);
  background: rgba(255,255,255,0.2);
 }
 h4
 {
  text-align: center;
  color: var(--primary);
  text-transform: uppercase;
  text-shadow: var(--shadow);
  padding-top: 1rem;
 }
 .container div
 {
  display: flex;
  flex-direction: column;
  padding: 1rem;
  margin: 1rem;
 }
 .container div label
 {
  color: #000;
  font-weight: bold;
 }
 .container div input
 {
  background: transparent;
  border: none;
  outline: none;margin-top: 0.5rem;
  background: rgba(255,255,255,0.7);
  padding: 0.5rem 1rem;
  color: var(--primary);
 }
 button
 {
  background: var(--primary);
  border: none;outline: none;
  color: #fff;
  padding: 1rem 1.5rem;
  margin: 1rem;
  font-weight: bold;
 }
 a
 {
  text-decoration: none;
  color: #000;
  font-weight: bold;
  text-align: center;
 }
</style>