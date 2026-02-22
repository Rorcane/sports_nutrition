<div id="carouselExampleDark" class="carousel carousel-red slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/32.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Алматы бойынша жеткізу-тегін</h5>
        <p>10 000 теңгеден бастап тапсырыс жасаңыз, біз оны Райымбек-Достық-әл-Фараби-Момышұлы көшелерінің алаңында 24 сағат ішінде тегін алып келеміз</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/31.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Бізге сенеді</h5>
        <p>Біз пакеттің қозғалысын бақылау нөмірін ұсынамыз. Сіз әрқашан оның қайда екенін білесіз және егер бірдеңе болса, біз сізге ақшаны қайтарамыз!</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/30.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ЕҢ ТӨМЕНГІ БАҒАЛАР</h5>
        <p>Біз ең ірі брендтердің ресми дистрибьюторларымыз, яғни сізге негізсіз артық төлемсіз ең жақсы бағаларды бере аламыз</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Алдыңғы</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Келесі</span>
  </button>
</div>

<script>
  var myCarousel = document.querySelector('#carouselExampleDark')
  var carousel = new bootstrap.Carousel(myCarousel)

  var prevButton = document.querySelector('.carousel-control-prev')
  var nextButton = document.querySelector('.carousel-control-next')

  prevButton.addEventListener('click', function () {
    carousel.prev()
  })

  nextButton.addEventListener('click', function () {
    carousel.next()
  })
</script>

 