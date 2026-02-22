<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="MNN"></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/index.php" class="nav-link px-2 text-secondary">Басты бет</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Себет</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Калория калькуляторы</a></li>
          <li><a href="/comments.php" class="nav-link px-2 text-white">Пікірлер</a></li>
          <li><a href="/about.php" class="nav-link px-2 text-white">Байланыс</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Искать..." aria-label="Search">
        </form>
        <div class="text-end">

        <?php
         if($_COOKIE['user'] == 'True'):
        ?>
        <a class="btn btn-outline-light me-2" href="/auth.php">Шығу</a>
        <?php else: ?>
          <a class="btn btn-outline-light me-2" href="/login.php">Кіру</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </header>