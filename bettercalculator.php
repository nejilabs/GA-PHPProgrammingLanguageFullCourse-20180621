<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Better Calculator</h1>
    <form action="bettercalculator.php" method="post">
      <input type="number" step="0.01" name="num1" placeholder="First Number"/><br>
      <input type="number" step="0.01" name="num2" placeholder="Second Number"/><br>

      <select name="op">
        <option value="">--Select operator--</option>
        <option value="+">Add</option>
        <option value="-">Subtract</option>
        <option value="*">Multiply</option>
        <option value="/">Divide</option>
      </select>

      <input type="submit"/>
    </form>

    <?php
      $number1 = $_POST['num1'];
      $number2 = $_POST['num2'];
      $operation = $_POST['op'];

      function calculate($num1,$num2,$op){
          if ($op == "+"){
            return $num1 + $num2;
          } elseif ($op == "-") {
            return $num1 - $num2;
          } elseif ($op == "*") {
            return $num1 * $num2;
          } elseif ($op == "/") {
            return $num1 / $num2;
          } else {
            return "Please select operator";
          }

      }

      $output = calculate($number1,$number2,$operation);
      echo "$output";


     ?>
  </body>
</html>
