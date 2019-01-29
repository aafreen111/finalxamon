<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Xamon Eye</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:400,700'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,600'>

      <link rel="stylesheet" href="css/options.css">

</head>

<body>

  <main role="main">

  <!-- Slider -->
  <section class="velo-slides" data-velo-slider="on" data-velo-theme="light">


    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>Graphics Slide</span></span></span> <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background: url(img/services.png);"></figure>
      </div>

      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="ohm"><span>Our</span></span><span class="ohm"><span>Services</span></span></h3>
        <p class="velo-slide__text"><span class="ohm"><span>Scroll Down</span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="#"><span class="btn-draw__text"><span>View Work</span></span></a></span>
      </header>
    </section>


    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>Graphics Slide</span></span></span>
      <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(img/graphics.png);"></figure>
      </div>

      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>Graphic</span></span><span class="oh"><span>Design</span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span>All your design needs at one place</span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="graphic.php"><span class="btn-draw__text"><span>Order a Design!</span></span></a></span>
      </header>
    </section>

    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>What's up Playas</span></span></span>
      <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(img/film.png);"></figure>
      </div>

      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>Film</span></span><span class="oh"><span></span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span>The here slider interaction thing is using animation performance.</span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="#"><span class="btn-draw__text"><span>View Work</span></span></a></span>
      </header>
    </section>

    <!-- Slide -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>What's up Playas</span></span></span>
      <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(img/audio.png);"></figure>
      </div>

      <!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>Audio</span></span><span class="oh"><span></span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span>The here slider interaction animation performance.</span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="#"><span class="btn-draw__text"><span>View Work</span></span></a></span>
      </header>
    </section>


    <!-- Slide - with Video -->
    <section class="velo-slide">
      <!-- Pretitle Hint -->
      <span class="velo-slider__hint"><span><span>Urban Influence</span></span></span>
      <!-- Slide BG -->
      <div class="velo-slide__bg">
        <!-- Borders -->
        <span class="border"><span></span></span> <!-- Img -->
        <figure class="velo-slide__figure" style="background-image: url(img/vr.png);"></figure>
        <div class="velo-slide__vid-wrap">
          <video autoplay="" class="velo-slide__vid" loop="" poster="">
            <source src="http://uiclients.com/assets/videos/ui-chaun.mp4" type="video/mp4"> Wait, are you still using IE? Bruv. Go get Chrome, or kick rocks.</video>
        </div>
      </div><!-- Header -->
      <header class="velo-slide__header">
        <h3 class="velo-slide__title"><span class="oh"><span>Augmented Reality</span></span><span class="oh"><span>Virtual Reality</span></span></h3>
        <p class="velo-slide__text"><span class="oh"><span>Just another slide again.</span></span></p>
        <span class="velo-slide__btn"><a class="btn-draw btn--white" href="#"><span class="btn-draw__text"><span>View Project</span></span></a></span>
      </header>
    </section>


    <!-- Slides Nav -->
    <nav class="velo-slides-nav">
      <ul class="velo-slides-nav__list">
        <li>
          <a class="js-velo-slides-prev velo-slides-nav__prev inactive" href="#0"><i class="icon-up-arrow"></i></a>
        </li>
        <li>
          <a class="js-velo-slides-next velo-slides-nav__next" href="#0"><i class="icon-down-arrow"></i></a>
        </li>
      </ul>
    </nav>
  </section>
</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.3.0/velocity.ui.js'></script>



    <script  src="js/options.js"></script>




</body>

</html>
