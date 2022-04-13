<?php

class loginContr extends Login{
    public $username;
    public $password;

    public function __construct($username, $password){
        #Assigning the input field properties to the constructor parameters. 
        $this->username = $username;
        $this->password = $password;
    }
    #this function is the main validation for the registration page which combines and execute the various error handlers.
    public function loginUser(){
        if ($this->validate() == false) {
            header("location: ../login.php?error=emptyInputs");
            exit();
        }
        #this method is to run if the confirmCheck() method fails and then registers the user
        $this->getUser($this->username,  $this->password);  
    }

    private function validate(){
        if (empty($this->username)  ||empty($this->password)) {
           $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
}