<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM enquery";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


?>
<!--  WHERE  $a=`roll`" -->







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

    <title>Enquery Correction Form </title>
  </head>
  <body>
        <div class="container">
      <div class="wrap">
  <div><h1>Royal Bakers Shop</div>
    <div><h5 style="text-transform: uppercase;"><span>Address :-</span> first floor badi building lalganj raibraly</h5></div>
    <div><h5><span>Email :-</span>   gpinfotec9@gmail.com</h5></div>
    <div><h5><span>Contact number :-</span>    +91 9889066906</h5></div>
</div>
      <div class="one">
        <h2><i class="fas fa-user-graduate"></i> Total No of Enquery <span><?php echo ($total); ?></span></h2>
       <!--  <a href="export.php"><i class="fas fa-file-excel"></i> Export Excel</a>
 -->   <form action="" method="GET"> <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" style="border: none;outline: none;border-bottom: 2px solid var(--border);"><button type="submit" value="Submit" style="margin: 0 1rem;background: #fff;border:none;outline: none;padding: 0.5rem 0.5rem;box-shadow:var(--shadow);color: var(--secondry);font-weight: bold;">Search</button></form>
      </div>
      <?php
if (isset($_GET['search'])) {
$se = $_GET['search'];

$query = "SELECT * FROM enquery WHERE CONCAT(mail,name,address) LIKE '%$se%'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


}
else
{
  
}







      ?>
      <div class="tab">
        
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" colspan="1" style="margin-left: 1rem;text-align: center;">Operation</th>
      
     
      <th scope="col">Name</th>
          <th scope="col">Mail/th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Query</th>

     
     
    </tr>
  </thead>
  <tbody>
    
<?php


if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {
  echo " <tbody>
    <tr>
   

     <td><a class='btn btn-primary' href='deleteenquery.php?a=$result[name]'onclick='return checkdelete()'>Delete</a></td>
    

<td>".$result['name']."</td>
<td>".$result['mail']."</td>
<td>".$result['mobile']."</td>
<td>".$result['address']."</td>
<td>".$result['remark']."</td>



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
    
    <footer class="bg-dark">
      <p>Developed by CoolDEveloper</p>
    </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this data');
  }
</script>
  </body>
</html>
