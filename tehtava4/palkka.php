<?php
$tuntipalkka = $_POST["hourlywage"] ?? 0;
$tuntimaara = $_POST["hourly"] ?? 0;
$yhteispalkka = $tuntipalkka * $tuntimaara;
echo "Joint salary: " . $yhteispalkka;
?>