<?php
header("Content-Type: text/html; charset=utf-8");
$db = mysql_connect("localhost", "userregs", "2408");
mysql_select_db("register", $db);
if(isset($_GET['fnumber']) && isset($_GET['snumber'])){
$fnumber= $_GET['fnumber'];
$snumber= $_GET['snumber'];
$calcul_sql = 'INSERT INTO calculdb (fnumber, snumber) VALUES('. $fnumber. ',' . $snumber. ')';
$insertCalcul= mysql_query($calcul_sql) or die(mysql_error());
<!-- If is set URL variables and insert is ok, show the site name -->
echo $sitename;
} else { 
echo 'Error! Please fill all fileds!';
}
?>