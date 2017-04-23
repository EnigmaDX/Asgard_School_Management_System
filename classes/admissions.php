<?php
/**
*@author Nana Adjoa S. Bentil
*@version 1.4
**/

//include database class
include_once("../database/Connection.php");

//checking which page's button has been clicked.
if (isset($_POST['page1button']))
{
  registerStudent();
}
else if (isset($_POST['page2button']))
{
  registerHealth();
}

// class Admissions extends Connection
// {
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

    $run = new Connection;

    $sql = "INSERT INTO STUDENT(sID,sFirstName,sMiddleInitial,sLastName,sGender,sDateofBirth,sPlaceofBirth,
      sNationality,sHomeAddress,sPostalAddress,state) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

    $success = $run->query($sql, $sFirstName,$sMiddleInitial,$sLastName,$sGender,
    $sDateofBirth,$sPlaceofBirth,$sNationality,$sHomeAddress,$sPostalAddress,$state);

    //var_dump($success);

    if($success)
    {
      registerParent();
    }
  }

    function registerParent()
    {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $userName = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $gender = $_POST['sex'];
      $phone = $_POST['phoneNum'];
      $address = $_POST['address'];
      // $status_id = 1;

      $run = new Connection;

      $sql = "INSERT INTO PARENT_OR_GUARDIAN(pId,firstName,lastName,email,username,password,gender,phoneNum,address)
      VALUES (?,?,?,?,?,?,?,?,?)";

      $success = $run->query($sql, $firstName, $lastName,$email, $userName, $password,$gender, $phone, $address);

      if($success)
      {
        // echo "works";
        header("location: ../pages/admissionspage2.php");
      }
      else
      {
        echo "Error: Sorry, we could not register your child. Try again later";
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

    $run = new Connection;

    $sql = "INSERT INTO HEALTH_RECORD(bloodType,Parent_or_Guardian_name,Parent_or_Guardian_number,Hospital,DoctorName,DoctorPhone,consent)
    VALUES (?,?,?,?,?,?,?)";

    $success = $run->query($sql, $bloodType,$parentName,$parentNumber,$hospital,$doctorName,$doctorPhone,$consent);
// var_dump($success);
    if($success)
    {
      header("location: ../pages/admissionsSubmit.php");
    }
    else
    {
      echo "Error during registration";
    }
  }
 ?>
