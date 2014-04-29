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
$count= mysql_num_rows($result1);
//mysql_fetch_array($result1);
if ($count >= 1)   
while ($row = mysql_fetch_array($result1))
        {
            echo $row['item_price'];
            ?>
<br>
<?php
        }
               ?>
