<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <style>
    #map {
      height: 500px;
      width: 80%;
      margin: 0 auto;
    }
  </style>
  <title> Байланыс нысаны</title>
</head>
<body>
<header class="p-3 text-bg-dark">
<div class ="container">
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
          <li><a href="/comments.php" class="nav-link px-2 text-white">Пікірлер</a></li>
          <li><a href="/about.php" class="nav-link px-2 text-secondary">Байланыс</a></li>
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
   <h3>Байланыс нысаны</h3>
   <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Электрондық Поштаны Енгізіңіз"
      class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="Хабарламаңызды енгізіңіз"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Жіберу</button>
   </form>
</div>
<br>
<div id="map"></div>

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
    var map = L.map('map').setView([51.5074, -0.1278], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; OpenStreetMap contributors',
      maxZoom: 18
    }).addTo(map);

    L.marker([43.202142, 76.871667]).addTo(map)
      .bindPopup('Біздің мекен жайымыз')
      .openPopup();
  </script>
<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"72f439b7ff264357",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
<br><br><br><br><br>
 <?php require "blocks/footer.php" ?>
</body>
</html>


