<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="cart.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="Apples"/><br>
      Oranges: <input type="checkbox" name="fruits[]" value="Oranges"/><br>
      Pears: <input type="checkbox" name="fruits[]" value="Pears"/><br>
      <input type="submit"/>
    </form>

    <?php
      $cart = $_POST["fruits"];
      echo("$cart[1]");
    ?>

  </body>
</html>
