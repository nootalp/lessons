<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#" />
    <script src="" defer></script>
    <title></title>
  </head>
  <body>
    // Verifica se há ocorrências de $_POST[?] fora da condicional; <br>
    <?php 
      if(isset($_POST["value1"])) {
        echo $_POST["value1"];
        
        $num1 = $_POST["value1"];
        $remnant = $num1 % 2;

        if($remnant == 0) {
          echo "<br> The numerator is even.";
        } else {
          echo "<br> The numerator is odd.";
        }
      }
    ?>
    <form method="post">
      <input type="text" name="value1" placeholder="Enter anything" />
      <button>Submit</button>
    </form>
  </body>
</html>
