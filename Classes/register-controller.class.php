<?php

class signupContr extends signUp{
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
            header("location: ../registration.php?error=telephoneNo");
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
        $this->setUser($this->name, $this->username, $this->email, $this->tel, $this->password, $this->type;);  
    }

    private function validate(){
        if (empty($this->name) || empty($this->username) || empty($this->email) || empty($this->tel) ||empty($this->password) || empty($this->confirmPwd) || empty($this->type;)) {
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
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        else{
        $result = true;
        }
        return $result;
    }

    #Telephone field validation
    private function telCheck(){
        $result;
        if ($_POST["tel"] < 11) {
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
        if(strlen($this->password) > 20){
            $result = false;
        }
        else{
        $result = true;
        }
        return $result;
    }

    private function confirmpwdCheck(){
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
        if(!$this->checkUser($this->username, $this->email)){
            $result = false;
            }
            else{
            $result = true;
            }
            return $result;
    }
}