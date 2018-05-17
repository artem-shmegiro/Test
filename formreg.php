<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test</title>

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
      
      <hr>      
      <div class="container center_div">
        <form class="form-horizontal" action="register.php" method="post">
   <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="login" placeholder="Login" required>
    </div>
  </div> 
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Sign up</button>
    </div>
  </div>
</form>  
      </div>
      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  