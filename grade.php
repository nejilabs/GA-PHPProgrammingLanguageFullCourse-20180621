<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="grade.php" method="post">
      <input type="text" name="studentName" placeholder="Name of the Student"/><br />
      <input type="submit" >
    </form>

    <?php
      $listOfGrades = array('student1' => 7, 'student2' => 2, 'student3' => 5);
      $gradeOfStudent = $listOfGrades[strtolower($_POST['studentName'])];
      echo("$gradeOfStudent <br />");
     ?>

  </body>
</html>
