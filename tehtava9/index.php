<?php include "usePhp.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="reset.css" />
  <title>WEBToon</title>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <section class="nav__left">
        <img class="logo" src="./logo.svg" alt="logo image" />
        <ul class="nav__left--list">
          <li><a href="#">ORIGINAL</a></li>
          <li><a href="#">GENRE</a></li>
          <li><a href="#">POPULAR</a></li>
          <li><a href="#">CANVAS</a></li>
        </ul>
      </section>
      <section class="nav__right">
        <p class="shop">WEBToon Shop</p>
        <a href="#" class="btn btn__publish">Publish</a>
        <a href="#" class="btn btn__login">Login</a>
      </section>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <img src="./banner.png" alt="" class="hero__img--left" />
    <div class="hero__right">
      <img src="./banner-sec-1.png" alt="" class="hero__img--right1" />
      <img src="./banner-sec-2.png" alt="" class="hero__img--right2" />
    </div>
  </section>

  <!-- Trending -->
  <section class="container">
    <h2 class="h2_heading">TRENDING</h2>
    <section class="trending__list">
      <?php renderItems($trendingItems); ?>
    </section>
  </section>

  <!-- New -->
  <section class="container new">
    <h2 class="new__heading h2_heading">NEW</h2>
    <section class="trending__list new__list">
      <?php renderItems($newItems); ?>
    </section>
  </section>

  <!-- Genres -->
  <section class="container genres">
    <h2 class="new__heading h2_heading">GENRE</h2>
    <?php foreach($genres as $genreName=>$genreItems): ?>
      <div class="genre-block">
        <h3 class="genre-title"><?= $genreName ?></h3>
        <section class="trending__list new__list">
          <?php renderItems($genreItems); ?>
        </section>
      </div>
    <?php endforeach; ?>
  </section>
</body>
</html>
