<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="hello.php" method="post">
      <input type="text" name="name" placeholder="Enter Name"/><br />
      <input type="submit" />
    </form>

    <?php

    $nameEntered = $_POST['name'];

      function sayHello($name){
        return "Hello $name" ;
      };

      $greeting = sayHello($nameEntered);
      echo "$greeting";
     ?>
  </body>
</html>
