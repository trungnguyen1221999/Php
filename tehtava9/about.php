<?php
// Mảng menu
$menuItems = [
    'HOME' => 'index.php', 
    'ABOUT US' => 'about.php',
    'CONTACT' => 'contact.php'
];

// Lấy trang hiện tại
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <style>
    html { font-size: 10px; box-sizing: border-box; }
    body { margin: 0; font-family: "Sora", sans-serif; font-size: 1.6rem; }
    a { text-decoration: none; color: black; }
    .btn { font-size: 1.4rem; padding: 8px 16px; background-color: black; color: #fff; border-radius: 22px; font-weight: 300; }
    .header { border-bottom: 1px solid #ddd; }
    .nav { max-width: 1200px; padding: 20px; display: flex; justify-content: space-between; align-items: center; margin: auto; font-weight: bold; }
    .nav__left { display: flex; align-items: center; gap: 20px; }
    .nav__left--list { display: flex; list-style: none; gap: 15px; padding: 0; margin: 0; }
    .nav__left--list li.active a { color: #00dc64; }
    .logo { width: 60px; cursor: pointer; }
    .nav__right { display: flex; align-items: center; gap: 12px; }
    .shop { color: #00dc64; text-transform: uppercase; font-size: 1.4rem; font-weight: 600; }

    /* ABOUT SECTION */
    .about { max-width: 1000px; margin: 40px auto; padding: 20px; text-align: center; }
    .about h1 { font-size: 3rem; margin-bottom: 20px; color: #00dc64; }
    .about p { font-size: 1.6rem; color: #333; line-height: 1.6; margin-bottom: 15px; }
    .about img { width: 100%; max-width: 600px; border-radius: 12px; margin-top: 20px; }

    /* Responsive */
    @media (max-width: 768px) {
      .nav { flex-direction: column; text-align: center; gap: 10px; }
      .nav__right { flex-direction: column; }
      .about { padding: 15px; }
      .about h1 { font-size: 2.2rem; }
      .about p { font-size: 1.4rem; }
    }
  </style>
</head>
<body>
  <header class="header">
    <nav class="nav">
      <section class="nav__left">
        <img class="logo" src="./logo.svg" alt="logo image" />
        <ul class="nav__left--list">
          <?php foreach($menuItems as $name => $link): ?>
            <li class="<?php if($currentPage === $link) echo 'active'; ?>">
              <a href="<?= $link ?>"><?= $name ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
      <section class="nav__right">
        <p class="shop">WEBToon Shop</p>
        <a href="#" class="btn btn__publish">Publish</a>
        <a href="#" class="btn btn__login" style="background-color:#fff; color:black; border:1px solid black;">Login</a>
      </section>
    </nav>
  </header>

  <section class="about">
    <h1>About Us</h1>
    <p>Welcome to <strong>WEBToon</strong> — your gateway to the world of creativity and storytelling. 
    We are a passionate team dedicated to bringing artists and readers together through engaging web comics.</p>
    <p>At WEBToon, we believe everyone has a story to tell. Our platform allows creators to publish freely, 
    connect with fans, and grow their audience worldwide.</p>
    <p>Join our community, explore amazing content, and share your imagination with the world!</p>
  </section>
</body>
</html>
