<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js"></script>
  <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .input-group .btn {
            display: block;
            width: 100%;
            padding: 8px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
        }

        table {
           margin-top:20px;
        }
    </style>
  <title> дүкен сайты </title>
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
          <li><a href="/calculator.php" class="nav-link px-2 text-secondary">Калория калькуляторы</a></li>
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
    </div>
</header>
<br>
   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $weight = $_POST['weight'];
       $height = $_POST['height'];

       $heightInMeters = $height / 100;
       $bmi = $weight / ($heightInMeters * $heightInMeters);

       echo "<div class='container'>";
       echo "<h1>BMI калькуляторы</h1>";
       echo "<div class='result'> Сіздің BMI: " . number_format($bmi, 2) . "</div>";
       echo "</div>";
   } else {
   ?>
   <div class="container">
       <h1></h1>
       <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
           <div class="input-group">
               <h3>Сіздің салмағыңыз (килограмм):</h3>
               <input type="text" name="weight" required>
           </div>
           <div class="input-group">
               <h3>Сіздің бойыңыз (сантиметр):</h3>
               <input type="text" name="height" required>
           </div>
           <button class="btn btn-success" type="submit">BMI есептеу</button>
       </form>
   </div>
   <?php
   }
   
   ?>
   <br><br>
   <div class="container">
   <table class="table">
	<thead>
		<tr><th>Дене салмағының индексі</th><th>Адамның массасы мен оның бойы арасындағы сәйкестік</th></tr>
	</thead>
	<tbody>
		<tr><td>16 және одан аз</td><td>Дене салмағының айқын жетіспеушілігі</td></tr>
		<tr><td>16-18,5</td><td>Дене салмағының жеткіліксіздігі (тапшылығы) </td></tr>
		<tr><td>18,5-25</td><td>Норма</td></tr>
		<tr><td>25-30</td><td>Артық дене салмағы (семіздік)</td></tr>
		<tr><td>30-35</td><td>Бірінші дәрежелі семіздік</td></tr>
		<tr><td>35-40</td><td>Екінші дәрежелі семіздік</td></tr>
		<tr><td>40 және одан көп</td><td>Үшінші дәрежелі семіздік (морбидті)</td></tr>
	</tbody>
</table>
</div>
<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"72f439b7ff264357",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>
<br><br>
  <?php require "blocks/footer.php" ?>
</body>
</html>

