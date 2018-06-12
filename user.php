<?PHP
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->  
    <title>Сalculator</title>

    <!-- Bootstrap -->  
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->  
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->  
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->  
  </head>
  <body>
      
     <div class="container center_div">
        <form class="form-horizontal" action="javascript:insert()" method="post">
        <hr>
       <div class="form-group">
        <label for="fnumber" class="col-sm-2 control-label">First number</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="fnumber" placeholder="First number" id="fnumber" required>
        </div>
      </div> 
        <hr>    
      <div class="form-group">
        <label for="operation" class="col-sm-2 control-label">Operation</label>
        <div class="col-sm-1">
            <select class="form-control" name="operation" id="operation" required>
              <option>+</option>
              <option>-</option>
              <option>*</option>
              <option>/</option>
            </select>
        </div>
      </div> 
        <hr>
      <div class="form-group">
        <label for="snumber" class="col-sm-2 control-label">Second number</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="snumber" placeholder="Second number" id="snumber" required>
        </div>
      </div>
        <hr>
        <div class="form-group">
        <label for="result" class="col-sm-2 control-label">Result</label>
        <div class="col-sm-6">
          <input type="number" disabled class="form-control" name="result" placeholder="Result" id="result">
        </div>
      </div>    
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" name="submit">Сalculate</button>
        </div>
      </div>      
        </form> 
         <a class="btn btn-default" href="records.php" role="button">History operation</a>
      </div>
      <div  id = "insert_response" > </ div>
      
      
                 
    
    <script src="ajax_framework.js" language="javascript"></script>
    <!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
