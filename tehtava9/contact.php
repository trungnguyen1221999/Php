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
  <title>Contact</title>
  <style>
    html {
      font-size: 10px;
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: "Sora", sans-serif;
      font-size: 1.6rem;
    }
    a {
      text-decoration: none;
      color: black;
    }
    .btn {
      font-size: 1.4rem;
      padding: 8px 16px;
      background-color: black;
      color: #fff;
      border-radius: 22px;
      font-weight: 300;
    }
    .header {
      border-bottom: 1px solid #ddd;
    }
    .nav {
      max-width: 1200px;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: auto;
      font-weight: bold;
    }
    .nav__left {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .nav__left--list {
      display: flex;
      list-style: none;
      gap: 15px;
      padding: 0;
      margin: 0;
    }
    .nav__left--list li.active a {
      color: #00dc64;
    }
    .logo {
      width: 60px;
      cursor: pointer;
    }
    .nav__right {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .shop {
      color: #00dc64;
      text-transform: uppercase;
      font-size: 1.4rem;
      font-weight: 600;
    }
    .btn__login {
      background-color: #fff;
      color: black;
      border: 1px solid black;
    }

    /* CONTACT SECTION */
    .contact {
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
    }
    .contact h1 {
      font-size: 3rem;
      color: #00dc64;
      margin-bottom: 10px;
    }
    .contact p {
      font-size: 1.6rem;
      color: #333;
      margin-bottom: 30px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
    }

    input, textarea {
      width: 100%;
      max-width: 600px;
      padding: 12px 16px;
      font-size: 1.4rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border-color 0.3s;
    }

    input:focus, textarea:focus {
      border-color: #00dc64;
    }

    textarea {
      resize: none;
      min-height: 120px;
    }

    button {
      padding: 10px 24px;
      background-color: #00dc64;
      border: none;
      color: white;
      font-size: 1.6rem;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #00c458;
    }

    /* FOOTER */
    footer {
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
      border-top: 1px solid #ddd;
      color: #666;
      font-size: 1.4rem;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
      .nav {
        flex-direction: column;
        gap: 10px;
      }
      .nav__right {
        flex-direction: column;
      }
      .contact h1 {
        font-size: 2.4rem;
      }
      .contact p {
        font-size: 1.4rem;
      }
      input, textarea {
        width: 90%;
      }
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
        <a href="#" class="btn btn__login">Login</a>
      </section>
    </nav>
  </header>

  <section class="contact">
    <h1>Contact Us</h1>
    <p>We’d love to hear from you! Please fill out the form below, and our team will get back to you soon.</p>

    <form action="#" method="POST">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <textarea name="message" placeholder="Your Message..." required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    &copy; <?= date("Y") ?> WEBToon. All rights reserved.
  </footer>
</body>
</html>
