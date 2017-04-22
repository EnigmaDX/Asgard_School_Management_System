<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// require_once dirname(__FILE__) . "/../database/init.php";
require_once dirname(__FILE__) . "/../database/Connection.php";

//check for login registration
if (isset($_POST['login'])) {
    verifylogin();
}

/**
 * 
 * @return result
 */
function fetchMajors() {
    $sql = "SELECT majorname FROM allmajor WHERE majorid != 99";
    $con = new Connection();
    $con->query($sql);
    return $con->fetch();
}


/**
 * 
 * @param string $username
 * @return array An assoc array with the selected record
 */
function selectUser(string $username) {
    $result = NULL;
    $assoc_array = NULL;
    $dbCon = connectToDB('cproject');

    if (!connected($dbCon)) {
        die();
    }
    //prepare statement
    $prepStatement = mysqli_prepare($dbCon, "SELECT username, pwd, fname, lname, email, gender, major_id, per_id FROM useraccount WHERE username = ?");

    if ($prepStatement) {
        //bind parameters
        mysqli_stmt_bind_param($prepStatement, 's', $username);
        //execute prepared statement
        mysqli_stmt_execute($prepStatement);
        $result = mysqli_stmt_get_result($prepStatement);
        //fetch assoc array
        $assoc_array = mysqli_fetch_assoc($result);
    }
    //close resources
    mysqli_stmt_close($prepStatement);
    mysqli_close($dbCon);
    //return assoc array
    return $assoc_array;
}

/**
*verifies login for the staff and parent
*/
function verifylogin()
{
    global $staffId, $pass;
    $staffId=$_REQUEST['Id'];
    $parentId=$_REQUEST['Id'];
    $pass=$_REQUEST['password'];

    $sql="SELECT * FROM staff, parent_or_guardian WHERE staffID=? OR pId=? ";
        
        //create new instance
    $verlogin=new Connection();
    $result=$verlogin->query($sql, $staffId);
    
        if($result)
        {
            $row=$verlogin->fetch();
            $passwd=$row['Password'];

            if (password_verify($pass, $passwd))
            {
                session_start();
                if($_SESSION['userid']=$row['staffID'] $$ $_SESSION['per_id']=$row['per_id'])
                {
                // $_SESSION['userid']=$row['staffID'];
                // $_SESSION['per_id']=$row['per_id'];
                    header("location: ../index.php");
                }
                else if($_SESSION['userid']=$row['pId'] $$ $_SESSION['per_id']=$row['per_id'])
                {
                    header("location: ../index.php");
                }
            }
            else
            {
                echo "login failed";
            }

        }
    
}
