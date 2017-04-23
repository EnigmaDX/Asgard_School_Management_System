<?php
/**
*@author Nana Adjoa S. Bentil
*@version 1.0
**/

//include database class
include_once("../database/Connection.php");

//checking which page's button has been clicked.
if (isset($_POST['page1button']))
{
  registerStudent();
  registerParent();
}
else if (isset($_POST['page2button']))
{
  registerHealth();
}

class Admissions extends Connection
{
  function registerStudent()
  {
    $sID;
    $sFirstName = $_POST['sFirstName'];
    $sMiddleInitial = $_POST['sMiddleInitial'];
    $sLastName = $_POST['sLastName'];
    $sGender = $_POST['sGender'];
    $sDateofBirth = $_POST['sDateofBirth'];
    $sPlaceofBirth = $_POST['sPlaceofBirth'];
    $sNationality = $_POST['sNationality'];
    $sHomeAddress = $_POST['sHomeAddress'];
    $sPostalAddress = $_POST['sPostalAddress'];
    $state = "APPLIED";

    $sql = "INSERT INTO STUDENT(sID,sFirstName,sMiddleInitial,sLastName,sGender,sDateofBirth,sPlaceofBirth,
      sNationality,sHomeAddress,sPostalAddress,state) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

    $success = $this->query($sql, $sID,$sFirstName,$sMiddleInitial,$sLastName,$sGender,
    $sDateofBirth,$sPlaceofBirth,$sNationality,$sHomeAddress,$sPostalAddress,$state);
    
    if($success)
    {
      registerParent();
    }
  }

    function registerParent()
    {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $userName = $_POST['userName'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $gender = $_POST['sex'];
      $phone = $_POST['phoneNum'];
      $address = $_POST['address'];
      $status_id = 1;

      $sql = "INSERT INTO PARENT_OR_GUARDIAN(pId,firstName,lastName,username,password,gender,phoneNum,address,status_id)
      VALUES (?,?,?,?,?,?,?,?,?,?,?)";

      $success = $this->query($sql, $firstName, $lastName, $userName, $password, $email, $gender, $phone, $address, $status_id);

      if($success)
      {
        echo "works";
        // header("location: ../pages/admissionspage2.php")
      }
      else
      {
        echo "Error";
      }
  }

  function registerHealth()
  {
    $bloodType = $_POST['bloodType'];
    $parentName = $_POST['parentName'];
    $parentNumber = $_POST['parentNumber'];
    $hospital = $_POST['hospital'];
    $doctorName = $_POST['doctorName'];
    $doctorPhone = $_POST['doctorPhone'];
    $consent = $_POST['consent'];

    $sql = "INSERT INTO HEALTH_RECORD(bloodType,Parent_or_Guardian_name,Parent_or_Guardian_number,Hospital,
    DoctorName,DoctorPhone,consent) VALUES (?,?,?,?,?,?,?)";

    $success = $this->query($sql, $bloodType,$parentName,$parentNumber,$hospital,$doctorName,$doctorPhone,$consent);

    if($success)
    {
      header("location: ../pages/admissionSubmit.php");
    }
    else
    {
      echo "Error during registration";
    }
  }
}

//
// class Admissions extends Connection
// {
//   //properties
//   private $sID;
//   private $sFirstName;
//   private $sMiddleInitial;
//   private $sLastName;
//   private $sGender;
//   private $sDateofBirth;
//   private $sPlaceofBirth;
//   private $sNationality;
//   private $sHomeAddress;
//   private $sPostalAddress;
//   private $state;
//
//   // for parent function
//   private $pID;
//   private $firstName;
//   private $lastName;
//   public $username;
//   private $password;
//   private $sex;
//   private $address;
//   private $phoneNum;
//   private $email;
//   private $status_id;
//
//   //methods
//   public function registerStudent($sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $sHomeAddress, $sPostalAddress, $state)
//   {
//     $sql = "INSERT INTO STUDENT(sID, sFirstName, sMiddleInitial, sLastName, sGender, sDateofBirth, sPlaceofBirth, sNationality, homeAddress, postalAddress, state)
//     VALUES (?,?,?,?,?,?,?,?,?,?,?)";
//
//     $success = $this->query($sql,$sID, $sFirstName, $sMiddleInitial, $sLastName, $sGender, $sDateofBirth, $sPlaceofBirth, $sNationality, $sHomeAddress, $sPostalAddress, $state);
//
//     return $success;
//   }
//
//   public function parentInfo()
//   {
//
//   }
// }


 ?>
