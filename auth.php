<?php
   $login = filter_var(trim($_POST['login']),
   FILTER_SANITIZE_STRING);

   $pass = filter_var(trim($_POST['pass']),
   FILTER_SANITIZE_STRING);

   $pass = md5($pass."qdjria;548223");
   
   $mysql = new mysqli('localhost', 'root', 'root','register-bd');
   $result = $mysql->query("SELECT * FROM `пользователи` WHERE `login` = '$login' AND `pass` = '$pass'");

   $user = $result->fetch_assoc();
   if(count($user) == 0) {
      echo "Мұндай пайдаланушы табылмады";
      exit();
   }

   setcookie('user', $user['login'], time() + 3600, "/");
   
   $mysql-> close();

   header('Location: /');
?>