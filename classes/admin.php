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
  // public function __construct(int $new, string $username, string $fname, string $lname, string $password, string $email, string $gender, ADMIN_STATUS){
  //   User::__construct($new, $username, $fname, $lname, $password, $email, $gender, ADMIN_STATUS);

  // }

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
  public function addUser1($id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id)
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
    $sql = "DELETE FROM STUDENT WHERE STUDENT.sID = '$sID'";

    $success = $this->query($sql, $sID);

    return $success;
  }

  //method to delete parent or staff info
  public function deleteUser($id, $status_id)
  {
    if ($status_id == 1)
    {
      $sql = "DELETE FROM PARENT_OR_GUARDIAN WHERE PARENT_OR_GUARDIAN.pId = '$id'";

      $success = $this->query($sql, $id, $status_id);

      return $success;
    }

    else if ($status_id == 2)
    {
      $sql = "DELETE FROM STAFF WHERE STAFF.staffID = '$id'";

      $success = $this->query($sql, $id, $status_id);

      return $success;
    }
  }

  //method to edit a course
  public function editCourseInfo($courseCode, $courseName, $courseTeacher, $courseVenue, $class)
  {
    $sql = "UPDATE COURSES SET courses.courseCode = '$courseCode', courses.courseName = '$courseName', courses.courseTeacher = '$courseTeacher',
    courses.courseVenue = '$courseVenue', courses.class = '$class' WHERE courses.courseCode = '$courseCode'";

    $success = $this->query($sql, $courseCode, $courseName, $courseTeacher, $courseVenue, $class);

    return $success;
  }

  //method to edit child info
  public function editChildInfo($sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $class)
  {
    $sql = "UPDATE STUDENT SET STUDENT.sID = 'sID', STUDENT.sFirstName = '$sFirstName', STUDENT.sMiddleInitial = '$sMiddleInitial',
    STUDENT.sLastName = '$sLastName', STUDENT.sGender = '$sGender', STUDENT.sDateofBirth = '$sDateofBirth', STUDENT.sPlaceofBirth = '$sPlaceofBirth',
    STUDENT.sNationality = '$sNationality', STUDENT.class = '$class' WHERE STUDENT.sID = '$sID'";

    $success = $this->query($sql, $sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $class);

    return $success;
  }

  //method to edit other user info
  public function editUserInfo($id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id)
  {
    if ($status_id == 1)
    {
      $sql = "UPDATE PARENT_OR_GUARDIAN SET PARENT_OR_GUARDIAN.pId = '$id', PARENT_OR_GUARDIAN.firstName = '$firstname',
      PARENT_OR_GUARDIAN.lastName = '$lastname', PARENT_OR_GUARDIAN.username = '$username', PARENT_OR_GUARDIAN.password = '$password',
      PARENT_OR_GUARDIAN.gender = '$gender', PARENT_OR_GUARDIAN.phoneNum = '$phone', PARENT_OR_GUARDIAN.address = '$address',
      PARENT_OR_GUARDIAN.status_id = '$status_id' WHERE PARENT_OR_GUARDIAN.pId = '$id'";

      $success = $this->query($sql, $id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id);

      return $success;
    }

    else if ($status_id == 2)
    {
      $sql = "UPDATE STAFF SET STAFF.staffID = '$id', STAFF.staffFname = '$firstname', STAFF.staffLname = '$lastname',
      STAFF.username = '$username', STAFF.password = '$password', STAFF.gender = '$gender', STAFF.staffNum = '$phone',
      STAFF.staffAddress = '$address', STAFF.status_id = '$status_id' WHERE STAFF.staffID = '$id'";

      $success = $this->query($sql, $id,$firstname,$lastname,$username,$password,$gender,$phone,$address,$status_id);

      return $success;
    }
  }

  //method to view all student info
  public function viewAllStudents()
  {
    $sql = "SELECT * FROM STUDENT";

    $success = $this->query($sql);

    return $success;
  }

  //method to view all courses
  public function viewAllCourses()
  {
    $sql = "SELECT * FROM COURSES";

    $success = $this->query($sql);

    return $success;
  }

  //method to view all staff info
  public function viewAllStaff()
  {
    $sql = "SELECT * FROM STAFF";

    $success = $this->query($sql);

    return $success;
  }

  //method to view all parent info
  public function viewAllParents()
  {
    $sql = "SELECT * FROM PARENT_OR_GUARDIAN";

    $success = $this->query($sql);

    return $success;
  }
}


?>
