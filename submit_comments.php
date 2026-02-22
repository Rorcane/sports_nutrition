<?php
// Подключаемся к базе данных
$db_host = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "register-bd";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Получаем данные из формы
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$created_at = date('Y-m-d H:i:s');

// Сохраняем данные в базе данных
$sql = "INSERT INTO comments (name, email, comment, created_at) VALUES ('$name', '$email', '$comment', '$created_at')";
mysqli_query($conn, $sql);

// Перенаправляем обратно на страницу комментариев
header("Location: comments.php");
exit();
?>