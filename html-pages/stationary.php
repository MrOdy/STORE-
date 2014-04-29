<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Stationary</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
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

<body>
	<div class="shell">		
		<div id="top-navigation"><a class="checkout" title="Checkout" href="./checkout/checkout.php">CHECKOUT</a><span><?php echo $count;?> Items</span><span class="sep">|</span><span>$0,00</span>
	  </div>
		<div class="welcome-message">
			<p>Default welcome msg!</p>
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
					<li><a title="Products" href="product.html">Products</a></li>
					<li></li>
					<li><a title="Browse" href="product.html">Browse</a></li>
					<li><a title="Orders" href="#">Orders</a></li>
					<li><a title="About Us" href="#">About Us</a></li>
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
							<li><a title="Food" href="food.php">Food</a></li>
							<li><a title="Stationary" href="stationary.html">Stationary</a></li>
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
							<h2>Stationary</h2>
							<a class="title-link" title="More Products" href="#">View More</a>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<div class="row">	
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (10).jpg" alt="Yin Yang shaped bookshelf" />
									<img class="top-label" src="css/images/top.png" alt="top sign" />
									<div class="desc">
										<p>conscience Guide to writing</p>
										<p class="price">₦2000</p>
                                                                                <p><a href="cart10.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (11).jpg" alt="Television stand" />
									<div class="desc">
										<p>All in one Basic Writing Text Used</p>
										<p class="price">₦2500</p>
                                                                                <p><a href="cart11.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (12).jpg" alt="Brown table with pink, blue and two green stools" />
									<img class="top-label" src="css/images/top.png" alt="top sign" />
									<div class="desc">
										<p>Writing Reaserch Papers:A guide to Process</p>
										<p class="price">₦3000</p>
                                                                                <p><a href="cart12.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
						</div>
						<div class="row">
						  <div class="product-holder">
						    <div class="product">
                                                        <img src="css/images/download (13).jpg" alt="table" />
								<div class="desc">
						    <p>Rules of thumbs for business writers </p>
										<p class="price">₦2000</p>
                                                                                <p><a href="cart13.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (9).jpg" alt="Armchair with a round stool" />
									<img class="new-label" src="css/images/new.png" alt="new sign" />
									<div class="desc">
										<p>Business writers handbook</p>
										<p class="price">₦4000</p>
                                                                                <p><a href="cart14.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
								<img src="css/images/download (6).jpg" alt="Brown sofa with two cushons" />
									<div class="desc">
										<p>Perspective on argument </p>
                                                                                <p class="price">₦4000<strike></strike></p>
                                                                                    <p><a href="cart15.php"><u>Add to Cart</u></a></p>
									
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
								<img src="css/images/download (7).jpg" alt="Colourful armchairs" />
									<div class="desc">
										<p>the essential element of public speaking </p>
										<p class="price">₦2000<strike></strike></p>
                                                                                <p><a href="cart16.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (8).jpg" alt="Black classical armchair" />
									<img class="new-label" src="css/images/new.png" alt="new sign" />									
									<div class="desc">
										<p>A history of english language</p>
										<p class="price">₦2100<strike></strike></p>
                                                                                <p><a href="cart17.php"><u>Add to Cart</u></a></p>
									</div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<img src="css/images/download (4).jpg" alt="White sofa" />
									<div class="desc">
										<p>the curious reasercher</p>
										<p class="price">₦2000<strike></strike>
										</p>
                                                                                <p><a href="cart18.php"><u>Add to Cart</u></a></p>
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