<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="comparenum.php" method="post">
      <input type="number" name="num1" placeholder="First Number"/><br>
      <input type="number" name="num2" placeholder="First Number"/><br>
      <input type="submit" />
    </form>

    <?php
      $number1 = $_POST['num1'];
      $number2 = $_POST['num2'];

      function getMax($num1, $num2){
        if ($num1 > $num2){
          return $num1;
        } elseif ($num1 < $num2) {
          return $num2;
        } else {
          return "Equal";
        }
      }

      $output = getMax($number1,$number2);
      echo "$output";
    ?>
  </body>
</html>
