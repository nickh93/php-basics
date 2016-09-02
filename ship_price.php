<?php
    $input_weight = $_GET["weight"];
    $input_distance = $_GET["distance"];
    $shipping_price = calculateShipping($input_weight, $input_distance); //parameters into function

    function calculateShipping($weight, $distance) //parameters
    {
        $price = $weight / 20 + $distance / 20;
        return $price + 5;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shipping Calculator</title>
</head>
<body>
    <div class="container">
        <h1>Price Calculated!</h1>
        <h3>Your package weighs: <?php echo $input_weight . " lbs"; ?> </h3>
        <h3>Your package is traveling: <?php echo $input_distance . " miles"; ?> </h3>
        <h3>The cost will be: $<?php echo $shipping_price; ?> </h3>
    </div>
</body>
</html>
