<?php
/**
*@author Nana Adjoa S. Bentil
*@version 1.0
**/

//include database class
include_once("../database/Connection.php");

//include user file
include_once("User.php");

class Admin extends User
{
  //constructor
  public function __construct(int $new, string $username, string $fname, string $lname, string $password, string $email, string $gender){
    User::__construct($new, $username, $fname, $lname, $password, $email, $gender, ADMIN_STATUS);

  }

  //method to add course
  public function addCourse($courseCode, $courseName, $courseTeacher, $courseVenue, $class)
  {
    $sql = "INSERT INTO courses(courseCode, courseName, courseTeacher, courseVenue, class) VALUES (?,?,?,?,?)";

    $success = $this->query($sql,$courseCode, $courseName, $courseTeacher, $courseVenue, $class);

    return $success;
  }

  //method to add child
  public function addChild($sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $class)
  {
    $sql = "INSERT INTO STUDENT(sID, sFirstName, sMiddleInitial, sLastName, sGender, sDateofBirth, sPlaceofBirth, sNationality, class)
    VALUES (?,?,?,?,?,?,?,?,?)";

    $success = $this->query($sql,$sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $class);

    return $success;
  }

  //method to add parent or staff
  public function addUser($id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id)
  {
    if($status_id == 1)
    {
      $sql = "INSERT INTO PARENT_OR_GUARDIAN(pId,firstName,lastName,username,password,gender,phoneNum,address,status_id)
      VALUES (?,?,?,?,?,?,?,?,?)";

        $success = $this->query($sql,$id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id);

        return $success;
    }
    else if ($status_id == 2)
    {
      $sql = "INSERT INTO STAFF(staffID,username,password,staffFname,staffLname,gender,staffNum,staffAddress,status_id)
      VALUES (?,?,?,?,?,?,?,?,?)";

        $success = $this->query($sql,$id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id);

        return $success;
    }
  }

  //method to delete course
  public function deleteCourse($courseCode)
  {
    $sql = "DELETE FROM courses WHERE courses.courseCode = '$courseCode'";

    $success = $this->query($sql, $courseCode);

    return $success;
  }

  //method to delete a child's information
  public function deleteChildInfo($sID)
  {
    $sql = "DELETE FROM STUDENT WHERE STUDENT.sID = $sID";

    $success = $this->query($sql, $sID);

    return $success;
  }

  //method to delete parent or staff info
  public function deleteUser($id, $status_id)
  {
    
  }
}


?>
