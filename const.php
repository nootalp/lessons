<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='shortcut icon' href='#'>
  <script src='' defer></script>
  <title></title>
</head>
<body>
  <?php
    $colors = array("Yellow", "Blue", "Red", "Green");
    $qnt = count($colors);
    
    for($x = 0; $x < $qnt; $x++) {
      echo $colors[$x] . "\n";
    }
  ?>
</body>
</html>