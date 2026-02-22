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
  <title> Төлем </title>
</head>
<body>
   <div class="container mt-5">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Төлем мекенжайы</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Есіміңіз</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
              Жарамды атау қажет
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Тегіңіз</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
              Жарамды тегі қажет.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Пайдаланушы аты</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
              Пайдаланушы атыңыз қажет.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(міндетті емес)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
              Жеткізу жаңартулары үшін жарамды электрондық пошта мекенжайын енгізіңіз.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Мекен-жай</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Абай" required="">
              <div class="invalid-feedback">
              Жеткізу мекенжайыңызды енгізіңіз.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Мекен-жай 2<span class="text-body-secondary">(міндетті емес)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Пәтер немесе люкс">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Ел</label>
              <select class="form-select" id="country" required="">
                <option value="">Таңдау...</option>
                <option>Қазақстан</option>
              </select>
              <div class="invalid-feedback">
              Жарамды Елді таңдаңыз.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Қала</label>
              <select class="form-select" id="state" required="">
                <option value="">Таңдау...</option>
                <option>Алматы</option>
              </select>
              <div class="invalid-feedback">
              Жарамды қаланы таңдаңыз
              </div>
            </div>

            
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Жеткізу мекенжайы менің төлем мекенжайыма сәйкес келеді</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Бұл ақпаратты келесі жолы сақтаңыз</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Төлем</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Несие картасы</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Дебеттік карта</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">Kaspi</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Карточкадағы аты</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-body-secondary">Карточкада көрсетілген толық аты-жөні</small>
              <div class="invalid-feedback">
              Карточкадағы атау міндетті
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Несие картаңыз</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
              Несие картасының нөмірін көрсету қажет
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Жарамдылығы</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
              Қажетті жарамдылық мерзімі
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
              Қауіпсіздік коды қажет
              </div>
            </div>
          </div>

          <hr class="my-4">

          <a href="/index.php" button class="w-100 btn btn-primary btn-lg" type="submit">Тапсырысты рәсімдеуді жалғастырыңыз</a>
        </form>
      </div>
    </div>
</div>
<br>
</body>
</html>