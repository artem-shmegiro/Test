<?php
    header("Content-Type: text/html; charset=utf-8");
    session_start();
$db = mysql_connect("localhost", "userregs", "2408");
mysql_select_db("register", $db);
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим логин в переменную $login
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим пароль в переменную $password
if (empty($login) or empty($password))
    {
    exit ("Заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
$password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

$result = mysql_query("SELECT * FROM userreg WHERE login='$login'",$db); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {
    //если пароли совпадают, то запускаем пользователю сессию!
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    header("Location: user.php");
    }
 else {

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
    ?>