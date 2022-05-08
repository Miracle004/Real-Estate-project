<?php

class signupController extends signUpModel{
    public $name;
    public $username;
    public $email;
    public $tel;
    public $password;
    public $confirmPwd;
    public $type;

    public function __construct($name, $username, $email, $tel, $password, $confirmPwd, $type){
        #Assigning the input field properties to the constructor parameters. 
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->tel = $tel;
        $this->password = $password;
        $this->confirmPwd = $confirmPwd;
        $this->type = $type;
    }
    #this function is the main validation for the registration page which combines and execute the various error handlers.
    public function signupUser(){
        if ($this->validate() == false) {
            header("location: ../index.php?error=emptyInputs");
        }
        elseif ($this->nameCheck() == false) {
            header("location: ../index.php?error=name");
        }
        elseif ($this->usrnameCheck() == false) {
            header("location: ../index.php?error=username");
        }
        /*elseif ($this->emailCheck() == false) {
            header("location: ../signup.php?error=email");
        }*/
        elseif ($this->telCheck() == false) {
            header("location: ../index.php?error=telephoneNo");
        }
        elseif ($this->passwordCheck() == false) {
            header("location: ../index.php?error=password");
        }
        elseif ($this->confirmCheck() == false) {
            header("location: ../index.php?error=registereduser");
        }
        #this method is to run if the confirmCheck() method fails and then registers the user
        $this->registerUser($this->name, $this->username, $this->email, $this->tel, $this->password, $this->type);  
    }

    private function validate(){
        if ($this->name = "" || $this->username = "" || $this->email = "" || $this->tel = "" || $this->password = "" || $this->confirmPwd = "" || $this->type = "") {
           $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
         
    #name field validation
    private function nameCheck(){
        if(!preg_match("/^[a-zA-Z ]*$/" ,$this->name)){
            $result = false;
           }
           else{
            $result = true;
            }
           return $result;
    }

    #Username field validation
    private function usrnameCheck(){
        if(!preg_match("/^[a-zA-Z ]*$/" ,$this->username)){
            $result = false;
           }
           else{
           $result = true;
            }
           return $result;
    }

    #Email field validation
    private function emailCheck(){
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL))
            return  true;
        return false ; 
    }

    #Telephone field validation
    private function telCheck(){
        $result;
        if (!isset($this->tel)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    #password field validation
    private function passwordCheck(){
        $result;
        if($this->password !== $this->confirmPwd){
            $result = false;
        }
        else{
        $result = true;
        }
        return $result;
    }

    #this method which checks if the user has been registered
    private function confirmCheck(){
        $result;
        if(!$this->checkIfRegistered($this->username, $this->email)){
            $result = true;
            }
            else{
            $result = false;
            }
            return $result;
    }
}