<?php
   // print_r($_POST);
   $email = $_POST['email'];
   $message = $_POST['message'];
   $error = '';
   if(trim($email) == '')
      $error = 'Введите ваш Email';
   else if(trim($message) == '')
      $error = 'Введите сообщение';
   else if(strlen($message) < 6)
      $error = 'Сообщение должно быть более 6 символов';
   
   if($error != '') {
      echo $error;
      exit;
   }

   $subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
   $header = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
   mail('muratbaevnuradil300@gmail.com', $subject, $message, $headers);

   header('Location: /about.php');

?>