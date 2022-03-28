<?php


class Login{
    public $username;
    public $password;
    public $inputed_data;
    public $login_form;
    public $login;

    #for property websites there are different users; agent, client and admin and the type property represents a user 
    public $type;
    

    public  function __construct($POST){
        $this->username = $POST['usrname'];
        $this->password = $POST['password'];
        $this->inputed_data =$this->data_validate();
        return false;
    }

    public function data_validate(){
            if (empty($this->username) || empty($this->password)) {
                return false;
            }
            elseif (strlen($this->password) < 7) {
                return false;
            }
            else
                return true;
    }
    #setting properties which will serve as session variables
    public function setUserDetails($session){
        $this->username = $session['username'];
        $this->type = $session['type'];
    }

    
    public function check_userData(){
        if ($this->inputed_data) {
            # code to check if there is a match for the newly validated user input;
            if($_SESSION['login'])
                $this->login == true;
            return true;

        }

        #code to be run if there is no match in the database for the submitted user details
        else{
            $this->login_form =<<<Form
            <a href="home.html"><img src="logo.png" alt="" class="site-logo"></a>
            <div class="parent">
                     <h1 class="header">Login</h1>
                     <span class = "error"></span>
                <form action="main.php" method="POST" autocomplete="off">
                    <div class="txt_field">
                         <input type="text" name="usrname"  value="$this->username">
                    </div>
                        <span class = "error"></span>
                                     
                    <div class="txt_field">
                        <input type="password" name="password" value="$this->password">
                    </div>
                        <span class = "error"></span>                 
                            <div class="pass"><a href="password_recovery.html" class="sign">Forgot Password?</a></div>
                                     
                            <input type="submit" value="Login" name="submit">
                                     
                            <div class="register-link">
                                Not A Member? <a href="registration.html" class="sign">Sign-Up</a>
                            </div>
Form;
               return false;   
        }
    }
}
?>