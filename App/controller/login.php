<?php

//session_start();
require_once '../model/User.php';
$userModel = new User();
$userVar = array();

if (isset($_POST['submit'])) {

    //  var_dump($_POST);
    if (empty($_POST["email"])) {
        $nameErr = "email is required";
        $error++;
    } else {
        $userVar['email'] = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $emailErr = "password is required";
        $error++;
    } else {
        $userVar['password'] = $_POST["password"];
    }
    $userModel->login($userVar['email'], $userVar['password']);
    
} else if (isset($_POST['forget'])) {
    header("Location: ./forgetPassword.php");
}

include ("../../views/components/loginForm.php");
