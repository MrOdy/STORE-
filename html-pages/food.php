<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>FOOD</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
    <?php
  $host="localhost"; // Host name 
$username="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="campus_store"; // Database name 
$tbl_name="mycart"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name;";
$result=mysql_query($sql) or die("Error query");
$count=mysql_num_rows($result);
// Mysql_num_row is counting table row
if ($count > 1)
    ?>
	<div class="shell">		
		<div id="top-navigation"><a class="checkout" title="Checkout" href="./checkout/checkout.php">CHECKOUT</a><span><?php echo $count;?> Items</span><span class="sep">|</span><span>$0.00</span>
	  </div>
		<div class="welcome-message">
			<p>&nbsp;</p>
		</div>
		<div class="cl"></div>
		<div id="wrapper-top"></div>
		<!-- Wrapper Middle -->
		<div id="wrapper-middle">
			<!-- Header -->
			<div id="header">
				<h1 id="logo"><a title="home" href="#">Book Store</a><img src="css/images/logo.jpg" width="613" height="343" /></h1>				
				<!-- Search -->
				<div id="search">
					<form action="" method="post">
						<input type="text" class="field" value="Search entire store here..." title="Search entire store here..." />				
						<input type="submit" value="" class="submit-button" />
					</form>				
			  </div>
				<!-- END Search -->				
	    </div>
			<!-- END Header -->
			<!-- Navigation -->
			<div id="navigation">
				<ul>
					<li class="first"><a title="Home" href="home.php">Home<span class="home">&nbsp;</span></a></li>
					<li><a title="Products" href="products.html">Products</a></li>
					<li></li>
					<li><a title="Browse" href="products.html">Browse</a></li>
					<li><a title="Orders" href="#">Orders</a></li>
					<li><a title="About Us" href="http://www.americanuniversitynigeria.org/">About Us</a></li>
					<li><a title="Contacts" href="#">Contacts</a></li>
				</ul>
				<div class="cl"></div>
			</div>
			<!-- END Navigation -->
			<!-- Main -->
			<div id="main">
				<!-- Slider --><!-- END Slider -->
				<!-- Sidebar -->
  <div id="sidebar">
					<div class="box">
						<div class="title">
							<h2>Categories</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<ul>
							<li><a title="Food" href="food.html">Food</a></li>
							<li><a title="Stationary" href="stationary.php">Stationary</a></li>
							<li><a title="Provision" href="food.html">Provision</a></li>
							<li><a title="Category_id" href="#">Category_id</a></li>
							<li><a title="Other" href="#">Other</a></li>							
						</ul>
					</div>
<div class="box">
					  <div class="title">
							<h2>Follow Us</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>	
						<ul class="socials">
							<li><a title="Facebook" href="#"><img src="css/images/fb.png" alt="facebook icon" />facebook</a></li>
							<li><a title="Tweeter" href="#"><img src="css/images/tweet.png" alt="tweeter icon" />twitter</a></li>
							<li><a title="Behance" href="#"><img src="css/images/behance.png" alt="behance icon" />behance</a></li>
							<li><a title="Blogger" href="#"><img src="css/images/blogger.png" alt="blogger icon" />blogger</a></li>
							<li><a title="Digg" href="#"><img src="css/images/digg.png" alt="digg icon" />digg</a></li>
						</ul>
					</div>
				</div>
				<!-- END Sidebar -->
				<!-- Content -->
				<div id="content">
					<!-- Products -->
					<div class="products">
						<div class="title">
							<h2>FOOD</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<div class="row">	
							<div class="product-holder">	
								<div class="product">
									<img src="../../../Users/Mafiasco/Desktop/Online_Shop_CSS_Template_for_Furniture_and_Clothes/css/images/10.jpg" alt="Yin Yang shaped bookshelf" width="179" height="182" />
									<img class="top-label" src="css/images/top.png" alt="top sign" />
<div class="desc">
										<p>Milo 500grm</p>
										<p class="price">₦750</p>
                                                                                <p><a href="cart.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (2).jpg" alt="Television stand" />
								  <div class="desc">
										<p>nutri C sachet</p>
										<p class="price">₦500</p>
                                                                                <p><a href="cart1.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/images (1).jpg" alt="Brown table with pink, blue and two green stools" />
									<img class="top-label" src="css/images/top.png" alt="top sign" />
								  <div class="desc">
										<p>Rice Crispy</p>
										<p class="price">₦700</p>
                                                                                <p><a href="cart2.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
						</div>
						<div class="row">
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/images (2).jpg" alt="table" />
									<div class="desc">
										<p>Delight biscuit</p>
										<p class="price">₦120</p>
                                                                                <p><a href="cart3.php"><u>Add to Cart</u></a></p>
								  </div>
									<div class="bottom"></div>
							  </div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
                                                                    <img src="css/images/download (3).jpg" alt="Armchair with a round stool" />
									<img class="new-label" src="css/images/new.png" alt="new sign" />
									<div class="desc">
										<p>chocolate digestive</p>
										<p class="price">₦430</p>
                                                                                <p><a href="cart4.php"><u>Add to Cart</u></a></p>
								  </div>
									<div class="bottom"></div>
							  </div>	
								<div class="product-bottom"></div>
							</div>
					  </div>	
						<div class="cl"></div>
					</div>
					<!-- END Products -->
					<!-- Products -->
					<div class="products best-sellers">
						<div class="title">
							<h2>Bestsellers</h2>
							<a class="title-link" title="More Bestsellers" href="#">More Bestsellers</a>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<div class="row">	
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (1).jpg" alt="Colourful armchairs" />
								  <div class="desc">
										<p>jacob crackers</p>
										<p class="price">₦900<strike></strike>
                                                                                           <p><a href="cart5.php"><u>Add to Cart</u></a></p>                                                                             

										</p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (5).jpg" alt="Black classical armchair" />
									<img class="new-label" src="css/images/new.png" alt="new sign" />									
								  <div class="desc">
										<p>maryland Biscuit</p>
										<p class="price">₦700<strike></strike>
                                                                                    <p><a href="cart6.php"><u>Add to Cart</u></a></p>
										</p>							
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (14).jpg" alt="White sofa" />
							  <div class="desc">
										<p>peak milk</p>
										<p class="price">₦550<strike></strike>
                                                                                    <p><a href="cart7.php"><u>Add to Cart</u></a></p>
										</p>				
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
						</div>	
						<div class="cl"></div>
					</div>		
					<!-- END Products -->
				</div>
				<!-- END Content -->
				<div class="cl"></div>
			</div>
			<!-- END Main -->
		</div>
		<!-- END Wrapper Middle -->
		<div id="wrapper-bottom"></div>	
		<!-- Footer  -->
		<div id="footer">
			<span class="author"><a href="http://css-free-templates.com/">Design by: CSS Free Templates</a></span>
			<p><a title="About Us" href="#">About Us</a><span>&frasl;&frasl;</span><a title="Site Map" href="#">Site Map</a><span>&frasl;&frasl;</span><a title="Advanced Search" href="#">Advanced Search</a><span>&frasl;&frasl;</span><a title="Customer Service" href="#">Customer Service</a><span>&frasl;&frasl;</span><a title="Contact Us" href="#">Contact Us</a><span>&frasl;&frasl;</span></p>
		</div>
		<!-- END Footer -->
	</div>
</body>
</html>