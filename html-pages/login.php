<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("home.php");
   }
}

	$data_submitted = isset($_POST['submit']);
	$errors = array();
	
?>
<html>
<head>
	<title>CSS Free Templates with jQuery Slider</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      </head>
<body>
	<div class="shell">		
		<div id="top-navigation">
			<a title="My Account" href="#">MY ACCOUNT</a><a class="cart" title="Shopping Cart" href="#">SHOPPING CART</a><a class="checkout" title="Checkout" href="#">CHECKOUT</a><span>0 items</span><span class="sep">|</span><span>$0,00</span>
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
				<h1 id="logo"><a title="home" href="#">Book Store<span class="first"><a title="Home" href="home.html"><img src="css/images/logo.jpg" width="513" height="243" class="left" /></a></span></a></h1>				
				<!-- Search -->
			  <div id="search">
					<form action="" method="post">
						<input type="text" class="field" value="Search entire store here..." title="Search entire store here..." />				
						<input type="submit" value="" class="submit-button" />
					</form>				
			  </div>
		  <!-- END Search --></div>
			<!-- END Header -->
			<!-- Navigation -->
			<div id="navigation">
				<ul>
					<li class="first"><a title="Home" href="home.html">Home</a><span class="home">&nbsp;</span></a></li>
					<li><a title="Products" href="#">Products</a></li>
					<li></li>
					<li><a title="Browse" href="#">Browse</a></li>
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
				<!-- Sidebar --><!-- END Sidebar -->
				<!-- Content -->
      <p/><p/>
                <div align="center">
               <!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
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