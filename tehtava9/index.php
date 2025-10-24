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

  <?php
// Menu items: key = tên menu, value = link tương ứng
$menuItems = [
    'HOME' => 'index.php', 
    'ABOUT US' => 'about.php',
    'CONTACT' => 'contact.php'
];

// Lấy trang hiện tại để highlight menu active
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
  <nav class="nav">
    <section class="nav__left">
      <img class="logo" src="./logo.svg" alt="logo image" />
      <ul class="nav__left--list ">
        <?php foreach($menuItems as $name => $link): ?>
          <li class="<?php if($currentPage === $link) echo 'active'; ?>">
            <a class="abc" href="<?= $link ?>"><?= $name ?></a>
          </li>
        <?php endforeach; ?>
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

  <?php
// Mảng các ngày trong tuần
$weekDays = ['MON','TUE','WED','THU','FRI','SAT','SUN'];

// Lấy ngày hôm nay (0 = Sunday, 1 = Monday,...)
$selectedDay = isset($_GET['day']) ? $_GET['day'] : $weekDays[date('N')-1]; // nếu không có, mặc định ngày hôm nay
?>
<ul class="week__list">
    <?php foreach($weekDays as $day): ?>
        <li class="day <?php if($day === $selectedDay) echo 'active'; ?>">
            <a href="?day=<?= $day ?>"><?= $day ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<div style="height: 10px; width: 100vw;"></div>
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
