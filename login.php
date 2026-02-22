<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title> Авторизация</title>
</head>
<body>
<div class ="container mt-4"> 
 <div class ="row">
  <div class ="col">
  <h1> Кіру </h1>
<form action="auth.php" method="post">
  <input type="text" name="login" placeholder="Поштаны енгізіңіз" id="login"
  class="form-control"><br>
  <input type="password" name="pass" placeholder="Құпия сөзді енгізіңіз" id="pass"
  class="form-control"><br>
  <button class="btn btn-success" type="submit">кіру</button>
</form>
</div>
<div class ="col">
  <h1> Тіркеу</h1>
<form action="logcheck.php" method="post">
  <input type="text" name="login" placeholder="Поштаны енгізіңіз" id="login"
  class="form-control"><br>
  <input type="password" name="pass" placeholder="Құпия сөзді енгізіңіз" id="pass"
  class="form-control"><br>
  <input type="password" name="pass2" placeholder="Құпия сөзді қайталаңыз" id="pass2"
  class="form-control"><br>
  <button class="btn btn-success" type="submit">тіркеу</button>
</form>
</div>
</div>
</div>
</body>
</html>