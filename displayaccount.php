<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM account";
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

    <title>Display Account</title>
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
        <h2><i class="fas fa-dice-d6" style="margin-right: 1rem;"></i> Total No of Entry<span><?php echo ($total); ?></span></h2>
    <!--     <a href="export.php"><i class="fas fa-file-excel"></i> Export Excel</a> -->
    <form action="" method="GET"> <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" style="border: none;outline: none;border-bottom: 2px solid var(--border);"><button type="submit" value="Submit" style="margin: 0 1rem;background: #fff;border:none;outline: none;padding: 0.5rem 0.5rem;box-shadow:var(--shadow);color: var(--secondry);font-weight: bold;">Search</button></form>
      </div>
      <?php
if (isset($_GET['search'])) {
$se = $_GET['search'];

$query = "SELECT * FROM account WHERE CONCAT(id,date,remark,debit,credit) LIKE '%$se%'";
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
     <th scope="col">Id</th>
      <th scope="col">Date</th>
     <th scope="col">Debit Amount</th>
      <th scope="col">Credit Amount</th>
 <th scope="col">Remark/Month</th>
      
     
     
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

<td>".$result['date']."</td>
<td>".$result['debit']."</td>

<td>".$result['credit']."</td>
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
