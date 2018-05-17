<?php
header("Content-Type: text/html; charset=utf-8");
$db = mysql_connect("localhost", "userregs", "2408");
mysql_select_db("register", $db);
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим  логин в  $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим пароль в $password
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
 if (empty($login) or empty($password) or empty($email)) 
    {
    exit ("Заполните все поля");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $email = trim($email);
 // проверка на существование пользователя с таким же логином
    $result = mysql_query("SELECT id FROM userreg WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO userreg (login,email,password) VALUES('$login','$email','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! <a href='index.php'>Вернуться на главную</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
?> 