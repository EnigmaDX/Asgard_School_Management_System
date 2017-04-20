<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once dirname(__FILE__) . "/../database/init.php";
require_once dirname(__FILE__) . "/../database/Connection.php";

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

function validateLogin(){
    $username= $_REQUEST['Username'];
    $password= $_REQUEST['Password'];

    $errors = array();

    if (empty($username)||empty($password))
    {
        if (preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i", $email) && preg_match("/^[a-zA-Z ]*$/",$firstname))
        {

            verifylogin($username,$password);
        }

        else {

        }
        
    }
    else
    {
        echo "Enter correct username and password";
    }

    if (empty($username))

    if (empty($password))

    if (preg_match("/^[a-zA-Z ]*$/",$firstname))

}
                                
