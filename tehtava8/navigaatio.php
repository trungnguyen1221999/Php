<?php
$sivut = [
    'Home' => 'etusivu.php',
    'Products' => 'tuotteet.php',
    'Contact' => 'yhteystiedot.php'
];

// Get the current page filename
$nykyinen_page = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <ul>
        <?php foreach ($sivut as $nimi => $url): ?>
            <li class="<?php if ($nykyinen_page == $url) echo 'active'; ?>">
                <a href="<?php echo $url; ?>"><?php echo $nimi; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
