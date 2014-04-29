<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Shopping Cart Checkout Widget</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
if ($count)
    ?>
<body>
    <br>
    
    <a href="../home.php"><strong>HOME PAGE</strong></a>
  <div class="cart">
    <div class="cart-top">
      <h2 class="cart-top-title">Checkout</h2>
      <div class="cart-top-info"><?php echo $count?> Items</div>
    </div>

    <ul>
        <?php
        $host="localhost"; // Host name 
$username="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="campus_store"; // Database name 
$tbl_name="mycart"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

        $sql1="SELECT item_description, item_price FROM mycart;";
$result1=mysql_query($sql1) or die("Error query");
//$count =  mysql_fetch_array($result);
        while ($row = mysql_fetch_array($result1))
        {
               ?>
       
      <li class="cart-item">
        <span class="cart-item-pic">
          <img src="http://upload.wikimedia.org/wikipedia/en/c/c4/The_Matrix_Revolutions_-_Music_From_The_Motion_Picture.jpeg">
        </span>
        Item 
        <span class="cart-item-desc"><?php echo $row['item_description']; ?></span>
        <span class="cart-item-price"><?php echo $row['item_price']; ?></span>
      </li>
    </ul>
<?php 
        }
         $host="localhost"; // Host name 
$username="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="campus_store"; // Database name 
$tbl_name="mycart"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

        $sql2="SELECT SUM(item_price) FROM mycart;";
$result2=mysql_query($sql2) or die("Error query");
$row2 = mysql_fetch_array($result2);
?>
    <div class="cart-bottom">
      Total: N<?php echo $row2['SUM(item_price)'];?>
      <a href="#" class="cart-button">Pay</a>
    </div>
  </div>

  </div>
</body>
</html>
