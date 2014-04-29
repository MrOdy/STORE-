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
		<div id="top-navigation"><a class="cart" title="Shopping Cart" href="checkout.php">SHOPPING CART</a><a class="checkout" title="Checkout" href="#">CHECKOUT</a><span><?php echo $count;?> Items</span><span class="sep">|</span><span>$0.00</span>
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
					<li class="first"><a title="Home" href="food.php">BACK<span class="home">&nbsp;</span></a></li>
					
				</ul>
				<div class="cl"></div>
			</div>
			<!-- END Navigation -->
			<!-- Main -->
			<div id="main">
				<!-- Slider --><!-- END Slider -->
				<!-- Sidebar -->

				<!-- END Sidebar -->
				<!-- Content -->
				<div id="content">
					<!-- Products -->
					<div class="products">
						<div class="title">
							<h2>SHOPPING CART</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<div class="row">	
							<div class="product-holder">	
								<div class="product">
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
					
				</div>
				<!-- END Content -->
				<div class="cl"></div>
			</div>
			<!-- END Main -->
		</div>
		<!-- END Wrapper Middle -->
		<div id="wrapper-bottom"></div>	
		<!-- Footer  -->
		<!-- END Footer -->
	</div>
</body>
</html>