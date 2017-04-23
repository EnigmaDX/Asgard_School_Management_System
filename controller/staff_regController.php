<?php
/**
*@author Yvette Umutari
*@version 1.0
**/

require_once($_SERVER['DOCUMENT_ROOT']."/asgardschool/classes/staff_registration.php");

$sID="";
$pID="";

/*
*This method gets unregistered courses for display
**/
function listUnregisteredCourses()
{
  //get user major
  global $sID;

  //create a new instance of the class
  $unregistered = new Courses;
  $unregistered->registeredCourseIds($sID);
  $runQuery = $unregistered->getUnregisteredCourses($sID);
  if($runQuery = true)
  {
    while($row = $unregistered->fetch())
    {
      echo "<input type = 'checkbox' name = 'courses'> {$row["className"]}.<br>";
    }
  }

}
/**
*This method lists the registered courses. It connects the registered course class to the childinfo page
**/
function listRegisteredCourses()
{
  // global $sID, $pID;
  $registerd=new Staff();
  $registerd->registeredcourses();
}
/*SELECT DISTINCT academic_record.sID, courses.courseCode, courses.courseName, academic_record.grade, academic_record.term FROM parent_child, academic_record, courses, student, parent_or_guardian WHERE academic_record.courseCode=courses.courseCode AND parent_child.sID=student.sID AND parent_child.parentID=parent_or_guardian.pId*/
?>
