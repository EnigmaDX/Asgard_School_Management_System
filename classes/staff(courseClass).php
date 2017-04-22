<?php
/**
*@author Yvette Umutari
*@version 1.0
**/
//connect to db class
require_once("connect.php");

class Staff extends Connect
{
  //properties
  public $courseName;
  public $courseCode;
  public $courseTeacher;
  public $registered = null;

  // __ constructor

  //methods
  
  /**
  *@param id
  *This method gets all unregistered courses.
  **/
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

  /**
  *This method lists the registered courses of the child
  **/
  public function registerForCourse()
  {
    $sql="SELECT DISTINCT courses.courseCode,courses.courseName FROM student, courses, student_classes WHERE student.class=courses.class AND courses.courseCode=student_classes.courseCode AND student.sID=student_classes.sID";
    $results=$this->query($sql);
    if ($results) {
      $row = $this->fetch();
    }
    
  }

  /**
  *@param sID 
  *This method gets the ids and names for registered courses
  **/
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
