<?php
/**
*@author Yvette Umutari
*@version 1.0
**/
//connect to db class
require_once("../database/connection.php");

class Staff extends Connection
{
  //properties
  public $sID;
  public $pID;
  public $output;
 
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
  *This method displays the courses of the child
  **/
  public function registeredcourses()
  {
    global $output;
    $sql="SELECT student.sID, academic_record.courseCode, courses.courseName, academic_record.grade,academic_record.term FROM academic_record, student, courses WHERE academic_record.sID=student.sID AND academic_record.courseCode=courses.courseCode";
    $results=$this->query1($sql);
    if($results)
      {
        
        
          // $sql="SELECT parent_child.parentID, parent_child.studentID FROM parent_child,";
         // echo $row['sID'] . " " . $row['courseCode'] . " ". $row['courseName'] ." " . $row['grade'] . " " . $row['term'] ;
  $output .= '
    <div class="pp">
      <table class="stable">
        <tr>
          <th>SID</th>
          <th>courseCode</th>
          <th>courseName</th>
          <th>Grade</th>
          <th>Term</th>
        </tr>';
        while ($row = $this->fetch()) {
         $output .=' <tr>
          
            <td>'.$row["sID"].'</td>
            <td>'.$row["courseCode"].'</td>
            <td>'.$row["courseName"].'</td>
            <td>'.$row["grade"].'</td>
            <td>'.$row["term"].'</td></a>
          
          </tr>
          </table
          </div>
          ';
        
      }
      echo $output;
    
  }
}

  /**
  *@param sID 
  *This method gets the ids and names for registered courses of the ward
  **/
  function registeredCoursIds($sID)
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

/*
$sql="SELECT DISTINCT courses.courseCode,courses.courseName FROM student, courses, student_classes WHERE student.class=courses.class AND courses.courseCode=student_classes.courseCode AND student.sID=student_classes.sID";
    $results=$this->query($sql);
    if ($results) {
      $row = $this->fetch();
    }
    */
?>
