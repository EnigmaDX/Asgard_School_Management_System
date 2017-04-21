<?php
//connect to db class
require_once("connect.php");

class Courses extends Connect
{
  //properties
  public $courseName;
  public $courseCode;
  public $courseTeacher;
  public $registered = null;

  // __ constructor

  //methods
  //get all unregistered courses.
  public function getUnregisteredCourses($id)
  {
    $sql = "SELECT sc.sID, cl.classCode, cl.className, cl.classVenue, cl.classTeacher, cl.grade FROM CLASSES AS cl INNER JOIN STUDENT_CLASSES
    AS sc ON cl.classCode = sc.classCode WHERE sc.sID = $id ";

    if(empty($this->registered) || $this->registered == NULL)
    {
      //run query
      //return results
      return $this->query($sql);
    }
    else
    {
      //get user course ids
      $courseIDs = implode(',', $this->registered);

      //append to sql
      $sql = $sql. " AND cl.classCode NOT IN ($courseIDs)";

      //run query
      //return results
      return $this->query($sql);
    }
  }

  public function registerForCourse()
  {

  }

  //get ids and names for registered courses
  function registeredCourseIds($sID)
  {
    //declare and array for ids
    $studentid = array();

    $sql = "SELECT cl.classCode, cl.className FROM CLASSES AS cl INNER JOIN STUDENT_CLASSES AS sc ON sc.classCode = cl.classCode
    WHERE sc.sID = $sID";

    $results = $this->query($sql);

    if($results)
    {
      //fetch ids
      while($row = $this->fetch())
      {
        $studentid[] = $row['classCode'];
      }
      //assign to property
      $this->registered = $studentid;
    }
    return $this->registered;
  }
}

// $test = new Courses;
// var_dump($test->getUnregisteredCourses(0));
?>
