<?php
/**
*@author Nana Adjoa S. Bentil
*@version 1.1
**/

//include database file
include_once("../database/Connection.php");

class courseTeacher extends Connection
{
  //properties
  private $staffID;
  private $staffFname;
  private $staffLname;
  
  // __ constructor
  //calling setter methods
  $this->setStaffID($staffID);
  $this->setStaffFname($staffFname);
  $this->setStaffLname($staffLname);

  //calling getter methods
  $this->getStaffID();
  $this->getStaffFname();
  $this->getStaffLname();
  
  //methods
  //setter methods
  public function setStaffID($staffID)
  {
    $this->staffID = $staffID;
  }

  public function setStaffFname($staffFname)
  {
    $this->staffFname = $staffFname;
  }

  public function setStaffLname($staffLname)
  {
    $this->staffLname = $staffLname;
  }
  
  //getter methods
  public function getStaffID()
  {
    return $this->$staffID;
  }

  public function getStaffFname()
  {
    return $this->staffFname;
  }

  public function getStaffLname()
  {
    return $this->staffLname;
  }
} ?>
