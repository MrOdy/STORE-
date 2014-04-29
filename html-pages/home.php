<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>CSS Free Templates with jQuery Slider</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div class="shell">		
		<div id="top-navigation">
			<a class="cart" title="Shopping Cart" href="#">SHOPPING CART</a><a class="checkout" title="Checkout" href="./checkout/checkout.php">CHECKOUT</a><span>0 items</span><span class="sep">|</span><span>$0,00</span>
		</div>
		<div class="welcome-message">
			<p>
Logged in as: <?= $fgmembersite->UserFullName() ?><br/>
<a href="logout.php">Logout</a>
</p>
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
					<li class="first"><a title="Home" href="#">Home<span class="home">&nbsp;</span></a></li>
					<li><a title="Products" href="product.html">Products</a></li>
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
				<!-- Slider -->
				<div id="slider-frame">					
					<div id="slider">
						<ul>
							<li>
								<img src="css/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="css/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>	
							</li>
							<li>
								<img src="css/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="css/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
							<li>
								<img src="css/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="css/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
							<li>
								<img src="css/images/chair.png" alt="Orage rotating chair" />
								<div class="caption">
									<img src="css/images/mega-sale.png" alt="Mega Sale Sign" />
									<p>Lorem ipsum dolor sit amet</p>
									<a title="Order Now!" class="order-button" href="#">order now</a>
								</div>
							</li>
						</ul>
						<div class="jcarousel-control">
				    		<a title="slide 1" href="#">1</a>
				     		<a title="slide 2" href="#">2</a>
				      		<a title="slide 3" href="#">3</a>
				     		<a title="slide 4" href="#">4</a>			     		 
   						</div>
   						<div class="slider-arrows">
	   						<a title="Next Slide" id="next" href="#">next</a>
	   						<a title="Previous Slide" id="prev" href="#">prev</a>
   						</div>   						
					</div>
				</div>
				<!-- END Slider -->
				<!-- Sidebar --><!-- END Sidebar -->
				<!-- Content -->
			  <div id="content">
					<!-- Products -->
					<div class="products">
						<div class="title">
							<h2>Newest Products</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>
						<div class="row">	
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="stationary.html"><img src="css/images/download (6).jpg" alt="Yin Yang shaped bookshelf" /></a>
									<img class="top-label" src="css/images/top.png" alt="top sign" />
								  <div class="desc">
										<p>Perspective on argument </p>
                                        <p class="price">₦4000</p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="food.html"><img src="css/images/download (5).jpg" alt="Television stand" /></a>
								  <div class="desc">
										<p>maryland Biscuit</p>
                                        <p class="price">₦700<strike></strike> </p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="stationary.html"><img src="css/images/download (4).jpg" alt="Brown table with pink, blue and two green stools" /></a>
									<img class="top-label" src="css/images/top.png" alt="top sign" />
								  <div class="desc">
										<p>the curious reasercher</p>
                                        <p class="price">₦2000<strike></strike> </p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
						</div>
						<div class="row">
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="food.html"><img src="css/images/download (1).jpg" alt="table" /></a>
								  <div class="desc">
										<p>jacob crackers</p>
                                        <p class="price">₦900<strike></strike> </p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="stationary.html"><img src="css/images/download (13).jpg" alt="Armchair with a round stool" /></a>
									<img class="new-label" src="css/images/new.png" alt="new sign" />
								  <div class="desc">
										<p>Rules of thumbs for business writers </p>
                                        <p class="price">₦2000</p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="statinary.html"><img src="css/images/download (7).jpg" alt="Brown sofa with two cushons" /></a>
							  <div class="desc">
										<p>the essential element of pulic speaking </p>
                                        <p class="price">₦2000<strike></strike></p>
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
									<a title="More Details" href="stationary.html"><img src="css/images/download (9).jpg" alt="Colourful armchairs" /></a>
								  <div class="desc">
										<p>Business writers handbook</p>
                                        <p class="price">₦4000</p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="food.html"><img src="css/images/download (2).jpg" alt="Black classical armchair" /></a>
									<img class="new-label" src="css/images/new.png" alt="new sign" />									
								  <div class="desc">
										<p>nutri C sachet</p>
                                        <p class="price">₦500</p>
                                </div>
									<div class="bottom"></div>
								</div>	
								<div class="product-bottom"></div>
							</div>
							<div class="product-holder">	
								<div class="product">
									<a title="More Details" href="food.html"><img src="css/images/download (3).jpg" alt="White sofa" /></a>
								  <div class="desc">
										<p>chocolate digestive</p>
                                        <p class="price">₦430</p>
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