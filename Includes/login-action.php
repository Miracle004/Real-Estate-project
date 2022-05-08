<?php
session_start(); 
var_dump($_SESSION);
//include("../Classes/databaseConn.php");
include("../Classes/login-model.php");
include("../Classes/login-controller.php");

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    

    $Login_User = new loginController($username, $password);

    #Running error handlers and user signup
    if($Login_User->loginUser()){
    #redirecting the user back to  the home page after a successful registration.
    header("location: ../dashboard.php?login=successful");
    }
    else
        header("location: ../login.php?error=loginfailed");
}
/*
include('User.php');

$Login_User = new Login($_POST) ;
    if($Login_User->check_userData()){
        $_SESSION['username'] = $Login_User->username;
        $_SESSION['password'] = $Login_User->password; 
        $_SESSION['type'] = "Admin" ;
        $_SESSION['login'] = true ;
       
    //Using the submitted user info in the setUserDetails function
    
    header('location: dashboard.php');
   
}
else{
    $Login_User->login_form;
}*/
?>