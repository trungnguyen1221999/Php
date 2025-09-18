<?php
function CalculateShipping($toimitustapa) {
    switch ($toimitustapa) {
        case "Pickup  - Free":
            return 0.00;
        case "Mail Parcel - €6.90":
            return 6.90;
        case "Home Delivery - €12.50":
            return 12.50;
        default:
            return -1;
    }
}

$yhteenveto = null;
$maara = 1;
$valittu_way = "Pickup  - Free";
$hinta_pcs = 349.90;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maara = intval($_POST['quantity']);
    $valittu_way = $_POST['shipping_method'];

    $subtotal = $maara * $hinta_pcs;
    $shipping_cost = CalculateShipping($valittu_way);
    $total = $subtotal + $shipping_cost;

    if ($shipping_cost != -1) {
        $yhteenveto = "<h2>Invoice</h2>";
        $yhteenveto .= "<p>Number: $maara</p>";
        $yhteenveto .= "<p>Price: €" . number_format($subtotal, 2) . "</p>";
        $yhteenveto .= "<p>Shipping method: $valittu_way</p>";
        $yhteenveto .= "<p>Shipping cost: €" . number_format($shipping_cost, 2) . "</p>";
        $yhteenveto .= "<p><strong>Total: €" . number_format($total, 2) . "</strong></p>";
    } else {
        $yhteenveto = "<p>Incorrect delivery method</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Form</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
}
.container {
    width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
h1 {
    color: #333;
}
form {
    margin-top: 20px;
}
input[type="number"], select {
    width: 100%;
    padding: 8px;
    margin: 10px 0 20px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
}
button {
    background-color: #0077b6; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}
button:hover {
    background-color: #005f86;
}
.invoice {
    margin-top: 30px;
    text-align: left;
    font-size: 16px;
    line-height: 1.6;
    border-top: 1px solid #ccc;
    padding-top: 20px;
}
</style>
</head>
<body>
<div class="container">
<h1>Order Electric Scooter</h1>

<h3>Product: Electric scooter (€349.90/piece)</h3>

<form method="post" action="">
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" min="1" value="<?php echo $maara; ?>">

    <label for="shipping_method">Shipping method:</label>
    <select name="shipping_method" id="shipping_method">
        <option value="Pickup  - Free" <?php if($valittu_way=="Pickup  - Free") echo "selected"; ?>>Pickup  - Free</option>
        <option value="Mail Parcel - €6.90" <?php if($valittu_way=="Mail Parcel - €6.90") echo "selected"; ?>>Mail Parcel - €6.90</option>
        <option value="Home Delivery - €12.50" <?php if($valittu_way=="Home Delivery - €12.50") echo "selected"; ?>>Home Delivery - €12.50</option>
    </select>

    <button type="submit">Calculate Price</button>
</form>

<?php
if ($yhteenveto) {
    echo "<div class='invoice'>$yhteenveto</div>";
}
?>
</div>
</body>
</html>
