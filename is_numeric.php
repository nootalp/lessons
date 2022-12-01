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
    $num = 0;
    $imp = $_POST["table"];
    
    if(isset($imp)) {
      if(!is_numeric($imp)) {
        echo "It isn't a number. Enter a number.";
      } elseif(is_numeric($num)) {
        for($mult = 0; $mult < 10; ++$mult ) {
          $tab = $num * $mult;
          echo `${$num} * ${$mult} = ${$tab}`;  
        }        

        
        
      }
    }
  ?>
  <form method="POST">
    <input type="text" name="table" placeholder="Enter a number">
    <button>Enter</button>
  </form>
</body>
</html>