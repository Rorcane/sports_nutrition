<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>

    .like-button {
      display: inline-block;
      padding: 10px;
      background-color: #fff;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .like-button.liked {
      background-color: green;
      color: #fff;
    }
  </style>
  <title> Отзывы </title>
</head>
<body> 

<header class="p-3 text-bg-dark">
<div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="MNN"></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <img src="img/MNN.png" alt="MNN" style="width: 50px;">
        </a><div style="width: 15px; height: 1px; display: inline-block;"></div>
          <li><a href="/index.php" class="nav-link px-2 text-white">Басты бет</a></li>
          <li><a href="/basket.php" class="nav-link px-2 text-white">Себет</a></li>
          <li><a href="/calculator.php" class="nav-link px-2 text-white">Калория калькуляторы</a></li>
          <li><a href="/comments.php" class="nav-link px-2 text-secondary">Пікірлер</a></li>
          <li><a href="/about.php" class="nav-link px-2 text-white">Байланыс</a></li>
        </ul>
        <?php require "blocks/Search.php" ?>

        <?php
        if($_COOKIE['user'] == '' ) :
        ?>

        <?php require "blocks/Enter.php" ?>
        <?php else:?>
        <a class="btn btn-outline-light me-2" href="/exit.php">Шығу</a>

        <?=$_COOKIE['user']?>

        <?php endif;?>
        </div>
      </div>
    </div>
  </header>

<div class="container mt-5">
   <h3>Пікірлер</h3><br>
<br>
<form action="submit_comments.php" method="post">
      <input type="email" id="email" name="email" placeholder="Электрондық поштаны енгізіңіз"
      class="form-control"><br>
      <input type="text" id="name" name="name" placeholder="Есіміңізді енгізіңіз"
      class="form-control"><br>
      <textarea name="comment" id="comment" class="form-control" placeholder="Пікіріңізді енгізіңіз"></textarea><br>
      <button type="submit"  name="button" class="btn btn-success">Жіберу</button>
   </form>
  <br>
  <br>
  <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "register-bd";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='comment'>";
    echo "<p>" . $row["name"] . "</p>";
    echo "<p>" . $row["comment"] . "</p>";
    echo "</div>";
  }
} else {
  echo "<p>Пока нет комментариев.</p>";
}



mysqli_close($conn);
?>
</div>
<script>
    function toggleLike(button) {
      button.classList.toggle('liked');
    }
  </script>
<br>
<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"72f439b7ff264357",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
<?php require "blocks/footer.php" ?>
</body>
</html>