<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Hintalaskuri</title>
</head>
<body>
<h1>Hintalaskuri</h1>

<?php
// 1. Defining variables
$tuotteen_name = "E-scooter";
$hinta_pcs = 349.90;
$kappalemaara = 2;
$alennusprosentti = 15;

// 2. Calculations
$valisumma = $hinta_pcs * $kappalemaara;
$alennus_eur = $valisumma * $alennusprosentti / 100;
$loppusumma = $valisumma - $alennus_eur;

// 3. Printing the data
echo "<p>Tuote: $tuotteen_name</p>";
echo "<p>Hinta per kpl: €" . number_format($hinta_pcs, 2) . "</p>";
echo "<p>Kappalemäärä: $kappalemaara</p>";
echo "<p>Välisumma: €" . number_format($valisumma, 2) . "</p>";
echo "<p>Alennus: €" . number_format($alennus_eur, 2) . " ($alennusprosentti%)</p>";
echo "<p>Loppusumma: €" . number_format($loppusumma, 2) . "</p>";
?>

</body>
</html>
