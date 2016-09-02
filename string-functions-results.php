<?php
    $upper = $_GET['upper'];
    $count = $_GET['word-count'];
    $shuff = $_GET['shuff'];
    $stripper = $_GET['strippers'];
    $stripperWord = $_GET['strippers-word'];

    $yelledString = strtoupper($upper);
    $countedString = str_word_count($count);
    $shuffleOutput = str_shuffle($shuff);
    $stripperOutput = stripos($stripper, $stripperWord);

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
          <div class="col-xs-6">
            <p>Upper Case Sentence: <?php echo $yelledString; ?></p>
          </div>
          <div class="col-xs-6">
            <p>Count of second sentence: <?php echo $countedString; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <p>sentence that gonna get shuffled: <?php echo $shuffleOutput; ?></p>
          </div>
          <div class="col-xs-6">
            <p>like I said, idk what the use of this is <?php echo $stripperOutput; ?></p>
          </div>
        </div>
    </div>
</body>
</html>
