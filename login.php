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
    $login = "Gabo";
    $password = "23";

    if(isset($_POST["login"])) {
      if($_POST["login"] == $login && $_POST["password"] == $password) {
        echo "Sucessful login.";
      } elseif ($_POST["login"] != $login && $_POST["password"] != $password) {
        echo "Incorrect user or password.";
      }
    }
  ?>
  <form method="POST">
    <input type="text" name="login" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button>Enter</button>
  </form>
</body>
</html>