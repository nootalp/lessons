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
    $list = ["Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo"];

    foreach($list as $key => &$element) {
      $element = $element . "1";
      echo "$element\n$key\n";
    }
    print_r($list);
  ?>
</body>
</html>