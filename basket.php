<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="js/java.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
  <style>
    .card {
      width: 200px;
      height: 200px;
      background-color: #ccc;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.1);
    }
  </style>
  <title> Себет </title>
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
          <li><a href="/index.html" class="nav-link px-2 text-white">Басты бет</a></li>
          <li><a href="/basket.php" class="nav-link px-2 text-secondary">Себет</a></li>
          <li><a href="/calculator.php" class="nav-link px-2 text-white">Калория калькуляторы</a></li>
          <li><a href="/comments.php" class="nav-link px-2 text-white">Пікірлер</a></li>
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
</header><br><br>
<div class="container ">
  <h3 class="mb-5"> Протейн </h3>
  <div class="d-flex flex-warp">
      <div class="card shadow-sm">
          <img src="img/pro1.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Optimum Nutrition Whey Gold Standard 100%, 2.27 кг</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">15 950,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/pro2.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Протеин Макслер Голден Вэй, 908 г Ваниль</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">19 800,00 ₸ KZT </a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/pro3.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Протеин Kevin Levrone Gold Whey, 2 кг Ваниль</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">24 750,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/pro4.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Vega, Sport Protein, протеин, шоколад, 1,8 кг (4 фунта [5,9 унции])</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">57 950,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   
</div>
        </div>
      <br>
      <br>
      <div class="container">
  <h3 class="mb-5"> Кератин </h3>
  <div class="d-flex flex-warp">
      <div class="card shadow-sm">
          <img src="img/crea1.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Optimum Nutrition Creatine Powder, 600 гр.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">7 950,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/crea2.png" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Maxler Креатин моногидрат, Golden Micronized Creatine 1000 гр (банка)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">11 800,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/crea3.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Креатин SAN Performance Creatine 1200 г.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">16 500,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/crea4.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Креатин PowerLabs Креатин моногидрат 300 гр.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">20 000,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   
</div>
        </div><br><br>
        <div class="container ">
  <h3 class="mb-5"> Спорттық барлар </h3>
  <div class="d-flex flex-warp">
      <div class="card shadow-sm">
          <img src="img/bar1.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Спорттық барлар Chikalab Chikabar</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">1 200,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/bar2.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Купить Snaq Fabriq SNAQER 50г, 1 шт</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">800,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/bar3.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Спорттық барлар</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">970,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/bar4.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Protein Joy QNT (60 г)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">1 500,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   
</div>
        </div><br><br>
        <div class="container">
  <h3 class="mb-5"> Аксессуарлар</h3>
  <div class="d-flex flex-warp">
      <div class="card shadow-sm">
          <img src="img/acses.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">ID115PLUS HR Bractelet SmartWatch</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">25 400,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/acses2.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">спорттық бөтелке</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">1 200,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/acses3.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Powerlabs 1,8 m тізе таңғыштары</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/cardpay.php">1 800,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   

      <div class="card shadow-sm">
          <img src="img/acses4.jpg" class="img-thumbnail">
            <div class="card-body">
              <p class="card-text">Katana yamato full height</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="/katana.html">50 000,00 ₸ KZT</a>
                </div>
                <small class="text-body-secondary">жеңілдік</small>
              </div>
            </div>
      </div>   
</div>
        </div><br>
  <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"72f439b7ff264357",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
<?php require "blocks/footer.php" ?>
</body>
</html>

