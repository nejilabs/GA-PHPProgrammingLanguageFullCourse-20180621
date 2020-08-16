<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php include 'header.html' ?>

    <?php
      $firstName = "Nelson ";
      $lastName = "Alba";

      //transform uppercase / lowercase
      echo(strtoupper("$firstName $lastName <br/>"));

      echo(strtolower($firstName . $lastName . "<br/>"));

      //Get length
      echo strlen($firstName . $lastName ) . "<br/>";

      echo($firstName[1]  . "<br/>");

      //str_replace(present value, new value, which variable)
      echo(str_replace($firstName, "Nicole", $firstName) . "<br/>");
      echo(str_replace("son", "Nicole", $firstName) . "<br/>");

      //substring
      echo(substr($firstName, 3,5) . "<br/>");

      //substring + str_replace
      $subString = substr($firstName, 0, 3);
      echo($subString  . "<br/>");
      echo(str_replace("$subString", "Nicole", $firstName) . "<br/>");

      //MATH FUNCTIONS
      $num = -100;
      echo(
        abs($num) ."<br/>".
        pow($num,2)."<br/>".
        sqrt(16)."<br/>".

        max(2,$num)."<br/>".
        min(2,$num)."<br/>".

        round(3.7)."<br/>".

        ceil(3.7)."<br/>".
        floor(3.7)."<br/>"
      );

      //Arrays
      $numberList = array(1,2,3,4,5);

      echo("$numberList[1] <br />");

      //count the number of elements inside arrays
      $numberOfElementsInArray = count($numberList);
      echo("$numberOfElementsInArray<br />");


      //ASSOCIATIVE ARRAYS
      $grades = array('Student1' => 7, 'Student2' => 2, 'Student3' => 5);
      $gradeOfStudent = $grades['Student3'];
      echo("$gradeOfStudent <br />");

      //WHile loops
      echo "While Loop<br />";
      $iterator = 1;
      while ($iterator <= 5){
        echo "$iterator <br />";
        $iterator++;
      }

      //For loops
      echo "For Loop<br />";
      for ($i=0; $i < 10; $i++) {
        echo "$i <br />";
      }

      $numberList = array(1,2,3,4,5);
      for ($i=0; $i < count($numberList); $i++) {
        echo "$numberList[$i] <br />";
      }
    ?>

    <?php include 'footer.html' ?>

  </body>
</html>
