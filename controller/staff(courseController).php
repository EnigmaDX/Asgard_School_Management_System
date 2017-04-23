<?php
//call the class

require_once("courseClass.php");


//get unregistered courses for display
function listUnregisteredCourses()
{
  //get user major
  global $sID;
  //global $user_id;

  //create a new instance of the class
  $unregistered = new Courses;

  $unregistered->registeredCourseIds($sID);

  //var_dump($unregistered->regcourses);

  $runQuery = $unregistered->getUnregisteredCourses($sID);

  //var_dump($runQuery);

  if($runQuery = true)
  {
    while($row = $unregistered->fetch())
    {
      echo "<input type = 'checkbox' name = 'courses'> {$row["className"]}.<br>";
    }
  }

  //var_dump($unregistered->fetch());
}
?>
