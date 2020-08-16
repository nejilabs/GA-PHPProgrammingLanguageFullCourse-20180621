<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="site.php" method="post">
      <input type="text" name="username" placeholder="Firstname"><br>
      <input type="text" name="age" placeholder="Age"><br>
      <input type="submit">
    </form>

    <br>

    <?php

    $username = $_GET["username"];
    $age = $_GET["age"];

      echo("
        Username:  $username <br />
        Age: $age
        ")
    ?>

  </body>
</html>
