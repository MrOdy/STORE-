<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$pass=""; // Mysql password 
$db_name="campus_store"; // Database name 
$tbl_name="mycart"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="INSERT INTO $tbl_name (category, item_description, item_price) SELECT category, item_description, item_price FROM item where Item_id=103";
//and password=md5('".$password."')");

$result=mysql_query($sql) or die("Error query");
?>

<script language=javascript>
alert("Item Added to Cart");
location = 'stationary.php';
</script>

