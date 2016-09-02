<?php
  $buyer_name = $_GET["buyer"];
  $address = $_GET["address"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
</head>
<body>
    <h1>Order Receipt</h1>

    <p><?php echo $buyer_name; ?></p>
    <p><?php echo $address; ?></p>
</body>
</html>
