<?php

//include database file
include_once("../database/Connection.php");

class courseTeacher extends Connection
{
  //properties
  private $staffID;
  private $staffFname;
  private $staffLname;

  //methods
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
