<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Chef{
        function makeRice(){
          echo "Make Rice <br/>";
        }

        function makeSoup(){
          echo "Make Soup <br/>";
        }

        function makeSpecialDish(){
          echo "Make Special Dish <br/>";
        }

      }

      Class ItalianChef extends Chef{
        function makeSpecialDish(){
          echo "Make Special Italian Dish <br/>";
        }
      }

      $chef = new Chef();
      echo $chef->makeRice();
      echo $chef->makeSpecialDish();

      $italianChef = new ItalianChef();
      echo $italianChef->makeRice();
      echo $italianChef->makeSpecialDish();
     ?>
  </body>
</html>
