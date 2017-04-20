<?php
/**
@author Nana Adjoa S. Bentil
@version 1.1
**/

//include database file
include_once("../database/Connection.php");

//include courseTeacher file
include_once("courseTeacher.php");

//class for courses
class Courses extends Connection
{
  //properties
  private $courseCode;
  private $courseName;
  private $courseTeacher;
  private $courseVenue;
  private $class;
  private $grade;

  //__constructor
  //calling setter methods
  $this->setCourseCode($courseCode);
  $this->setCourseName($courseName);
  $this->setCourseTeacher($courseTeacher);
  $this->setCourseVenue($courseVenue);
  $this->setClass($class);
  $this->setGrade($grade);

  //calling getter methods
  $this->getCourseCode();
  $this->getCourseName();
  $this->getCourseTeacher();
  $this->getCourseVenue();
  $this->getClass();
  $this->getGrade();

  //methods
  //setter methods
  public function setCourseCode($courseCode)
  {
    $this->courseCode = $courseCode;
  }

  public function setCourseName($courseName)
  {
    $this->courseName = $courseName;
  }

  public function setCourseTeacher($courseTeacher)
  {
    $this->courseTeacher = $courseTeacher->getStaffFname();
  }

  public function setCourseVenue($courseVenue)
  {
    $this->courseVenue = $courseVenue;
  }

  public function setClass($class)
  {
    $this->class = $class;
  }

  public function setGrade($grade)
  {
    $this->grade = $grade;
  }

  //getter methods
  public function getCourseCode()
  {
    return $this->courseCode;
  }

  public function getCourseName()
  {
    return $this->courseName;
  }

  public function getCourseTeacher()
  {
    return $this->courseTeacher;
  }

  public function getCourseVenue()
  {
    return $this->courseVenue;
  }

  public function getClass()
  {
    return $this->class;
  }

  public function getGrade()
  {
    return $this->grade;
  }
}

?>
