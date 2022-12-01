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
    for($num = 0; $num <= 100; $num++) {
      if($num % 2 == 1) {
        continue;
      }
      echo $num . "\n";
      
    }
    echo "<br>";
    for($num = 0; $num <= 100; $num++) {
      if($num % 2 == 0) {
        echo $num . "\n";
      }
    }  
  ?>
</body>
</html>