<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <img src="./img/slide_1.jpg" alt="">
      </div>
      <div class="swiper-slide">
      <img src="./img/slide_2.jpg" alt="">
      </div>
      <div class="swiper-slide">
      <img src="./img/slide_3.jpg" alt="">
      </div>
    </div>
    <div class="button-next"><img src="./img/slide-btn-next.svg" alt=""></div>
    <div class="button-prev"><img src="./img/slide-btn-prev.svg" alt=""></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:  1.2,
      spaceBetween: 12,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
      centeredSlides: true, //アクティブなスライドを中央に配置

    });
  </script>
</body>

</html>
