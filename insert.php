<?php
header("Content-Type: text/html; charset=utf-8");
$db = mysql_connect("localhost", "userregs", "2408");
mysql_select_db("register", $db);
if(isset($_GET['fnumber']) && isset($_GET['snumber'])){
$fnumber= $_GET['fnumber'];
$snumber= $_GET['snumber'];
$operation= $_GET['operation'];    
$calcul_sql = ("INSERT INTO calculdb (fnumber, operation, snumber) VALUES('$fnumber','$operation','$snumber')");
$insertCalcul= mysql_query($calcul_sql) or die(mysql_error());

echo "$fnumber $operation $snumber";
} else { 
echo 'Error! Please fill all fileds!';
}
?>
