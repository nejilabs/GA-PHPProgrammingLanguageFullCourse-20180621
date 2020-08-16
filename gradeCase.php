<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Grade Judgement</h1>
    <form action="gradeCase.php" method="post">
      <input type="text" name="grade" placeholder="Enter Grade"><br>
      <input type="submit" />
    </form>

    <?php
    $grade = $_POST['grade'];

    switch($grade){
      case "7":
      case "6":
      case "5":
        echo "You did great!";
      break;
      case "4":
      case "3":
        echo "You passed";
      break;
      case "2":
      case "1":
        echo "You Failed";
      break;
    }

     ?>

  </body>
</html>
