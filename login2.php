<?php
session_start();
include("connection.php");



?>



<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="loginw.css">
</head>
<body>
	<div class="form" >
		<form action="" method="post">
		<h2>Admin Login</h2>
		<div class="input">
			<div class="inputbox">
				<label>Username</label>
				<input type="text" name="userid" placeholder="example@xyz.com">
			</div>
			<div class="inputbox">
				<label>Password</label>
				<input type="password" name="password" placeholder="********">
			</div>
			<div class="inputbox">
			
				<input type="submit" name="submit" value="login">
			</div>
			<p class="forget">Forget Password ? <a href="#">Click Here</a></p>

	</div>
</form>
	</div>
</body>
</html>
<?php
if (isset($_POST['submit']))
 {
           $luser = $_POST['userid'];
           $pwd = $_POST['password'];
           $query = "SELECT * FROM admin_login WHERE userid='$luser' && password='$pwd'";
          $data = mysqli_query($conn, $query);
          $total = mysqli_num_rows($data);
       
        if ($total == 1) {
          	$_SESSION['user_name']= $luser;
          	header('location:adminpanel.php');
          	echo "login success";
          }
          else
          {
          	echo "login Failed";
          }
}





?>