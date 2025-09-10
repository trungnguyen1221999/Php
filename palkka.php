<?php
$tuntipalkka = $_POST["hourly wage"] ?? 0;
$tuntimaara = $_POST["hour"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara;
echo "Joint salary: " . $yhteispalkka;
?>