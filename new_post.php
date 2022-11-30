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
    if(isset($_POST["putit"])) {
      $age = $_POST["putit"];
      if($age <= 12) {
        echo "This age is from a child or a teenager.";
      } elseif($age <= 22) {
        echo "This age is from a teenager or a adult.";
      } else {
        echo "This age is from an elderly.";
      }
    }
  ?>
  <form method="post">
    <input type="text" name="putit" placeholder="Enter anything">
    <button>Submit</button>
  </form>
</body>
</html>