<?php

if (isset($_POST["submit"])) {
    #Grabbing the data from the input fields.
    $name = $_POST["name"];
    $username = $_POST['usrname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $confirmPwd = $_POST['confirmpwd'];


#instantiating the signUp controller class
include("../Classes/model.php");

include("../Classes/register.class.php");

include("../Classes/register-controller.class.php");

$register = new signupContr($name, $username, $email, $tel, $password, $confirmPwd);

#Running error handlers and user signup
$register->signupUser();

#redirecting the user back to  the home page after a successful registration.
header("location: ..index.php?error=none");
}
?>