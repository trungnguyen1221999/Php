<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Shipping Calculator</title>
</head>
<body>
<h1>Shipping Calculator</h1>

<?php
// 1. Define the function
function CalculateShippingCharges($toimitustapa) {
    switch ($toimitustapa) {
        case "Retrieve":
            return 0.00;
        case "Mail Package":
            return 6.90;
        case "Home delivery":
            return 12.50;
        default:
            return -1; // Invalid input
    }
}

// 2. Check if form is submitted
if (isset($_POST['submit'])) {
    $valittu_way = $_POST['delivery_method'];
    $hinta = CalculateShippingCharges($valittu_way);

    // 3. Display the result
    if ($hinta != -1) {
        echo "<p>Selected delivery method: <strong>$valittu_way</strong></p>";
        echo "<p>Price: €" . number_format($hinta, 2) . "</p>";
    } else {
        echo "<p>Incorrect delivery method</p>";
    }
}
?>

<!-- 4. Form for selecting delivery method -->
<form method="post" action="">
    <label for="delivery_method">Choose delivery method:</label>
    <select name="delivery_method" id="delivery_method">
        <option value="Retrieve">Retrieve</option>
        <option value="Mail Package">Mail Package</option>
        <option value="Home delivery">Home delivery</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Calculate Price">
</form>

</body>
</html>
