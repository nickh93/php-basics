<?php
    $numberInput = $_GET['number'];
    $squaredResult = square($numberInput);

    function square($number)
    {
      $squaredNumber = $number * $number;
      return $squaredNumber;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="css/stylesheet" type="text/css" href="styles.css">
    <title>Create a Business Card</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>Input number: <?php echo $numberInput; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <p>Output number: <?php echo $squaredResult; ?></p>
          </div>
        </div>
    </div>
</body>
</html>
