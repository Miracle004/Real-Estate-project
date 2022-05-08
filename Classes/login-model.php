<?php

class LoginModel{

    protected function connect(){
        $servername = "localhost";
        $username ="root";
        $password ="";
        $dbname = "comcraft_property";
    
        #connecting to the database
        try{
          $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username);
          return $dbh;
          }
          catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br>";
            die();
          }
      }

    protected function getUser($username, $password){
        $stmt = $this->connect()->prepare('SELECT userPassword FROM users WHERE username = ? OR email = ?;');

        if (!$stmt->execute(array($username, $password))) {
            $stmt = null;
            header("location: ../login.php?error=dbconnectfailed");
            exit();
        }

        if ($stmt->rowCount() !== 1) {
            $stmt = null;
            header("location: ../login.php?error=Accountnotfound");
        }

        $checkPwd = password_verify($password, $pwdHashed[0]["userPassword"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location: ../login.php?error=IncorrectPassword");
        }
        elseif ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND userPassword = ?;');

            if (!$stmt->execute(array($username, $username, $password))) {
                $stmt = null;
                header("location: ../login.php?error=dbconnectfailed");
                exit();
             }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=usernotFound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userId"] = $user[0]["usersid"];
            $_SESSION["username"] = $user[0]["username"];

            $stmt = null;
        }

        $this->connect()->close();
    }
}
    /*
    public $username;
    public $password;
    public $inputed_data;
    public $login_form;
    public $login;

    #for property websites there are different users; agent, client and admin and the type property represents a user 
    public $type;
    

    public  function __construct($POST){
        $this->username = $POST['username'];
        $this->password = $POST['password'];
        #$this->login = $POST['login'];
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
        $this->password = $session['password'];
        $this->type = $session['type'];
    }

    
    public function check_userData(){
        if ($this->inputed_data) {
            # code to check if there is a match for the newly validated user input;
                if($_SESSION['login'] === true)
                   $this->login =$_SESSION['login'];
                return true;
                }

            #code to be run if there is no match in the database for the submitted user details
        else{
            $this->login_form =<<<Form
            <a href="index.php"><img src="logo.png" alt="" class="site-logo"></a>
            <div class="parent">
                     <h1 class="header">Login</h1>
                     <span class = "error"></span>
                <form action="main.php" method="POST" autocomplete="off">
                    <div class="txt_field">
                         <input type="text" name="username"  value="$this->username">
                    </div>
                        <span class = "error"></span>
                                     
                    <div class="txt_field">
                        <input type="password" name="password" value='$this->password'>
                    </div>
                        <span class = "error"></span>                 
                            <div class="pass"><a href="password_recovery.html" class="sign">Forgot Password?</a></div>
                                     
                            <input type="submit" value="Login" name="submit">
                                     
                            <div class="register-link">
                                Not A Member? <a href="registration.html" class="sign">Sign-Up</a>
                            </div>
Form;
               return true;   
        }
    }*/

