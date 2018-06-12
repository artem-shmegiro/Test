<?php
header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>History operation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
        $db = mysql_connect("localhost", "userregs", "2408");
        mysql_select_db("register", $db);
        $sql_select = "SELECT * FROM calculdb";
        $result = mysql_query($sql_select);
        $row = mysql_fetch_array($result);
        do
        {
            printf("<p>Operation " .$row['id'] . " : " .$row['fnumber'] . " " .$row['operation'] . " " .$row['snumber'] . " = " .$row['result'] . "</p>---------<br/>"
            );
        }
        while($row = mysql_fetch_array($result));
         ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>