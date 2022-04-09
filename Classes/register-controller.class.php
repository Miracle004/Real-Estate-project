<?php

class signupContr extends signUp{
    public $name;
    public $username;
    public $email;
    public $tel;
    public $password;
    public $confirmPwd;

    public function __construct($name, $username, $email, $tel, $password, $confirmPwd){
        #Assigning the input field properties to the constructor parameters. 
        $this->name = $name;
        $this->name = $username;
        $this->name = $email;
        $this->name = $tel;
        $this->name = $password;
        $this->name = $confirmPwd;
    }
    #this function is the main validation for the registration page which combines and execute the various error handlers.
    public function signupUser(){
        if ($this->validate() == false) {
            header("location: ../registration.php?error=emptyInputs");
            exit();
        }
        if ($this->nameCheck() == false) {
            header("location: ../registration.php?error=name");
            exit();
        }
        if ($this->usrnameCheck() == false) {
            header("location: ../registration.php?error=username");
            exit();
        }
        if ($this->emailCheck() == false) {
            header("location: ../registration.php?error=email");
            exit();
        }
        if ($this->telCheck() == false) {
            header('location: ../registration.php?error=telephoneNo');
            exit();
        }
        if ($this->confirmpwdCheck() == false) {
            header("location: ../registration.php?error=password");
            exit();
        }
        if ($this->confirmCheck() == false) {
            header("location: ../registration.php?error=registereduser");
            exit();
        }
        #this method is to run if the confirmCheck() method fails and then registers the user
        $this->setUser($this->name, $this->username, $this->email, $this->tel, $this->password);  
    }

    public function validate(){
        if (empty($this->name) || empty($this->username) || empty($this->email) || empty($this->tel) ||empty($this->password) || empty($this->confirmPwd)) {
           $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
         
    #name field validation
    public function nameCheck(){
        if(!preg_match("/^[a-zA-Z ]*$/" ,$this->name)){
            $result = false;
           }
           else{
            $result = true;
            }
           return $result;
    }

    #Username field validation
    public function usrnameCheck(){
        if(!preg_match("/^[a-zA-Z ]*$/" ,$this->username)){
            $result = false;
           }
           else{
           $result = true;
            }
           return $result;
    }

    #Email field validation
    public function emailCheck(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
        $result = true;
        }
        return $this->result;
    }

    #Telephone field validation
    public function telCheck(){
        $result;
        if (!preg_match($this->tel, FILTER_VALIDATE_INT)) {
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    #password field validation
    public function passwordCheck(){
        $result;
        if(strlen($this->password) > 20){
            $result = false;
        }
        else{
        $result = true;
        }
        return $result;
    }

    public function confirmpwdCheck(){
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
    public function confirmCheck(){
        $result;
        if(!$this->userSignup($this->username, $this->email)){
            $result = false;
            }
            else{
            $result = true;
            }
            return $result;
    }
}