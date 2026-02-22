<header class="p-3 text-bg-dark">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="MNN"></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <img src="img/MNN.png" alt="MNN" style="width: 50px;">
        </a><div style="width: 15px; height: 1px; display: inline-block;"></div>
          <li><a href="/index.php" class="nav-link px-2 text-secondary">Басты бет</a></li>
          <li><a href="/basket.php" class="nav-link px-2 text-white">Себет</a></li>
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
</header>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>
  </div>

  <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small show" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 34.4px, 0px);" data-popper-placement="bottom-end">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>