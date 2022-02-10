
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM product";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$search1 = $_GET['a'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="product.css">
	<link rel="stylesheet" type="text/css" href="slick.css"/>
	<script src="https://kit.fontawesome.com/9d33041dbc.js" crossorigin="anonymous"></script>
	
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
<body>
	<div class="load" id="load1">
      <img src="loader.gif">
    </div>
    
    <div class="tom" id="tom1">
	<div class="main-wrapper1">

		<div class="nav-background">
			<div class="mobile-logo" data-aos="fade-up"><img src="img/logo.png" alt=""></div>
			<div class="mobile-nav">
				<div class="cart flex align-item ">
					<div>
						<img src="icons/cart.svg">
						<a href="#">Cool Developer</a>
					</div>
				</div>
				<div class="nav-top" data-aos="fade-up">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Project</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">contact us</a></li>
                        <li><a href="#">Posts</a></li>
                        

					</ul>
				</div>
				<div class="contact" data-aos="fade-up">
					<i class="fas fa-clock"></i> 
					<div>
						<h5 >Working Hours: </h5>
						<h6 >Mon - Sat (8.00am - 12.00 am)</h6>
					</div>
				</div>
				<div class="time" data-aos="fade-up">
					<i class="fas fa-phone-square-alt"></i>
					<div>
						<h5>Call us: 7355228160</h5>
						<h6>Mail : corecomputer143@gmail.com</h6>
					</div>
				</div>
			</div>

		</div>

		<div class="screen">

			<div class="nav-trigger">
				<i class="fas fa-bars" style="color: #000; font-size: 2rem;z-index: 3;margin-right: 1rem;"></i>
			</div>

			<div class="screen-area">
	<header>
		<div class="container">
			<div>Royal Bakers</div>
			<div><a href="#">Home</a>
					<a href="#">Category</a>
					<a href="#">Enquiry</a>
					<a href="#">Youtube</a>
					<a href="#">About</a>
					<a href="#">Contact</a></div>
		</div>

	</header>
	<section class="search">
		<div class="container">
				<div class="box">
					<form action="product1.php" method="GET">
			   <input type="text" name="search" value="<?php echo $search1?>"  placeholder="Search what do you want under ther category">
			<button type="submit" value="Submit" >Search</button></form>
		</div>
		</div>
	</section>

  <?php
if (isset($search1)) {
$se = $search1;

$query = "SELECT * FROM product WHERE CONCAT(name,dis,category,price) LIKE '%$se%'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


}
else
{
  
}







      ?>

<section class="item">
	<div class="container">

		 <?php
if($total != 0)
{
while ($result = mysqli_fetch_assoc($data)) {

 ?>


<div class="card">
			<img src="<?php echo $result["image"] ; ?>">
			<div class="title">
				<h5><?php echo $result["name"] ; ?></h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i><?php echo $result["price"] ; ?></h5>
			</div>
			<hr>
			<div class="title"><h5>Product Id</h5>
				<h5 style="color: var(--primary);"><?php echo $result["pid"] ; ?></h5></div>
			<div class="content">
				<p><?php echo $result["dis"] ; ?></p>
			</div>
			<button type=""><i class="fas fa-shopping-cart"style="margin-right: 0.5rem;"></i>Visit</button>
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

</section>

<section class="slider">
	<div class="container">
		<h2><i class="fas fa-dice-d6" style="margin-right: 0.5rem;"></i>Our Latest Products</h2>
	<div class="sliders">
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
		<div class="card">
			<img src="s6.jpg">
			<div class="title">
				<h5>Brandname</h5>
				<h5 class="rate"><i class="fas fa-rupee-sign" style="margin-right: 0.4rem;"></i>45</h5>
			</div>
		</div>
	</div>
</div>
</section>

<section class="tag">
	<div class="container">
		<h2>Search tags</h2>
		<div>
			<a href="#" class="active"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Brown Bread</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Brown Cake</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Delicious Pastry</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Pizza</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Coldrinks</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> SoftDrinks</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Fragments</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Kissan Jam</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> all type Products</a>
			<a href="#"><i class="fas fa-search" style="margin-right: 0.5rem;"></i> Pure Honey</a>

		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div>
			<img src="s6.jpg">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi</p>
		</div>
		<div>
			<h5>Important Links</h5>
			<a href="#">Category</a>
			<a href="#">Enquery</a>
			<a href="#">Blogs</a>
			<a href="#">RoyalBakers</a>
		</div>
			<div>
			<h5>Our Terms</h5>
			<a href="#"><i class="fab fa-android" style="margin-right: 0.5rem;"></i>Download App</a>
			<a href="#">New Updates</a>
			<a href="#">Product</a>
			<a href="#">Contact Developer</a>
		</div>
			<div>
			<h5>Social Links</h5>
			<a href="#"><i class="fab fa-youtube" style="margin-right: 0.5rem;"></i> Youtube</a>
			<a href="#"><i class="fab fa-facebook" style="margin-right: 0.5rem;"></i> Facebook</a>
			<a href="#"> <i class="fab fa-whatsapp" style="margin-right: 0.5rem;"></i>Whatsup</a>
			<a href="#"> <i class="fab fa-instagram" style="margin-right: 0.5rem;"></i>Instagram</a>
		</div>
	</div>
	<center><p style="padding: 1rem 0;"><i class="far fa-copyright" style="margin-right: 0.5rem;"></i>Copyright By RoyalBakers</p></center>
</footer>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick.min.js"></script>

<script type="text/javascript">
	  $(document).ready(function(){
      $('.sliders').slick({
      
              autoplay:true,slidesToShow:4,slideToScroll:1,prevArrow:".prev-btn",
              nextArrow:".next-btn",
              responsive:[
              {
              	breakpoint:992,
              	settings:{
              		slidesToShow:3,
              }
              	 

              }, {
              	breakpoint:768,
              	settings:{
              		slidesToShow:2,
              	},

              }, {
              	breakpoint:502,
              	settings:{
              		slidesToShow:1,
              }
          }],        /* hom many slides you want  to show  at the single time */
      });
         $('.nav-trigger').click(function(){
	$('.screen').toggleClass('scaled');
})
             });
</script>
</body>
</html>