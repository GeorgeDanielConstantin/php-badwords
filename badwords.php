<?php
$text = $_GET["text"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        echo $text;
        echo strlen($text);
        echo str_replace($_GET["censored"], "****", $text);
        ?>
    </div>
  
</body>
</html> 