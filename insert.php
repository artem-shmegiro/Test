<?php
header("Content-Type: text/html; charset=utf-8");
$db = mysql_connect("localhost", "userregs", "2408");
mysql_select_db("register", $db);
if(isset($_GET['fnumber']) && isset($_GET['snumber'])){
$fnumber= $_GET['fnumber'];
$snumber= $_GET['snumber'];
$operation= $_GET['operation'];    
          if($_GET['snumber']==0 && $_GET['operation']=="/") echo "error";
          else{
            switch ($_GET['operation'])
                {case "+":
                      $result= $_GET['fnumber']+$_GET['snumber'];
                      break;
                case "-":
                      $result= $_GET['fnumber']-$_GET['snumber'];
                      break;
                case "*":
                      $result= $_GET['fnumber']*$_GET['snumber'];
                      break;
                case "/":
                      $result= $_GET['fnumber']/$_GET['snumber'];
                      break;
                default:
                   echo "error";
                      }
            }
$calcul_sql = ("INSERT INTO calculdb (fnumber, operation, snumber, result) VALUES('$fnumber','$operation','$snumber','$result')");
$insertCalcul= mysql_query($calcul_sql) or die(mysql_error());

echo "$fnumber $operation $snumber";} 
else { 
echo 'Error! Please fill all fileds!';
}
?>
