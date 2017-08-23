<?php
// вся процедура работает на сесиях. Именно в ней хранятся данные пользователя, пока он находится на сайте. Очень важно запустить их в самом начале странички!!!
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Авторизация 1.2</title>
</head>

<body><br><br><br>
<div id="tiy1">

<?php if ( empty($_SESSION['login']) || empty($_SESSION['id']) ): ?>
    <div class="items">
        <div class="item">Здесь<br>будет <br> написан <br> какой то <br>текст</div>
        <div class="item"> <a href='reg.php'>Register</a>   <a href='login.php'>In</a></div>
    </div>
	
<?php else
   {
   // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['login']." Сайт в режиме разработки если есть предложения пиши на почту a1133914@ya.ru <br/><a href='exit.php'>Выход</a>";
   }
?>
</div>
</body>
</html>