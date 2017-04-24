<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

function verify_login() {
    if (!isset($_SESSION['userid']) || empty($_SESSION['userid'])) {
        header('Location: ../index.php');
    }
}

function getCurrentPage() {
    return basename($_SERVER['PHP_SELF']);
}


function unserializeUser($session) {
    $user = NULL;

    if (isset($session)) {
        $temp = User::getDefault();
        //unserialise user data
        $unseri = $temp->unserialize($session);
        //replicate user
        $user = User::init($unseri);
    }
    return $user;
}

?>