<?php
   $login = filter_var(trim($_POST['login']),
   FILTER_SANITIZE_STRING);

   $pass = filter_var(trim($_POST['pass']),
   FILTER_SANITIZE_STRING);

   $pass2 = filter_var(trim($_POST['pass2']),
   FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 5 || mb_strlen($login) > 90 ) {
   echo "рұқсат етілмеген пошта ұзындығы";
   exit();
}  
   else if (mb_strlen($pass) < 4 || mb_strlen($pass) > 50 ) {
   echo "Рұқсат етілмеген құпия сөз ұзындығы";
   exit();
}
   else if (mb_strlen($pass) !== mb_strlen($pass2)) {
   echo "Құпия сөздер бірдей емес";
   exit();
}

   $pass = md5($pass."qdjria;548223");

   $mysql = new mysqli('localhost', 'root', 'root','register-bd');
   $mysql->query("INSERT INTO `пользователи` (`login`, `pass`) VALUES('$login', '$pass')");
   
   $mysql-> close();

   header('Location: /');

?>