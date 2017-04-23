<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// require_once dirname(__FILE__) . "/../database/init.php";
require_once dirname(__FILE__) . "/../database/Connection.php";
$username="";
$password="";
echo "hi";
//check for login registration
if (isset($_REQUEST['login'])) {
    echo "hii";
    verifylogin();

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
    global $username, $password;
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];

    $errors = array();
    $string = "";

    if (empty($username))

        $error[]= "enter a username";

    if (empty($password))

        $error[]= "enter a password";

    if (preg_match("/^[a-zA-Z0-9]*\.[a-zA-Z0-9]*/",$username)!=1)

        $error[] = "enter a valid username";

    for ($i=0; $i<count($error); $i++){

        $string .= $error[i];
        $string .= "<br>";
    }

    echo $string;

}

/**
*verifies login for the staff and parent
*/
function verifylogin()
{
    global $username, $password;
    $username=$_REQUEST['username'];
    // $parentId=$_REQUEST['Id'];
    $pass=$_REQUEST['password'];

    $sql="SELECT * FROM staff WHERE username=?";
    echo $sql;
        //create new instance
    $verlogin=new Connection();
    $result=$verlogin->query($sql,$username);
    echo $result;
        if($result)
        {
            $row=$verlogin->fetch();
            $passwd=$row['password'];

            echo "man";
            if (password_verify($pass, $passwd))
            {
                echo "Hi";
                session_start();
                if($_SESSION['userid']=$row['staffID'])
                {
                    echo "hello";
                    header("location: ../pages/staff_dashboard.php");
                }
                else if($_SESSION['userid']=$row['pId'])
                {
                    echo "hey";
                    header("location: ../pages/dashboard.php");
                }
            }
            else
            {
                echo "login failed";
            }

        }
    }
