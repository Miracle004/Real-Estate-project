<?php
session_start();

class signUp{
    public $name;
    public $username;
    public $email;
    public $password;
    public $confirmPwd;

    public function __construct(){
        $this->name = $_POST['name'];
        $this->username = $_POST['usrname'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->confirmPwd = $_POST['confirmpwd'];
    }
    
    public function validate(){
        $result;
        if (empty($this->name) || empty($this->username) || empty($this->email) ||empty($this->password) || empty($this->confirmPwd)) {
            $result = false;
        }
        else
            $result = "THank You Your Registration has been noted";
            return $result;
    }

    public function nameCHeck(){
        $result;
        if(!preg_match("/^[a-zA-Z ]*$/" ,$this->name)){
            $nameErr = "<div class='nameSide'>Only Letters and whitespaces are allowed</div>";
            $result = false;
           }
           else
            $result = true;
    }

    public function emailCheck(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid Email Format";
            $result = false;
        }
        else
            $result = true;

    }

    public function passwordCheck(){
        if(strlen($this->password) > 20){
            $passwordErr = "*Password is too long, please check!!";
            $result = false;
        }
        else
            $result = true;
    }

    public function confirmCheck(){
        if($this->password !== $this->confirmPwd){
            $confirmPwdErr = "Password does not match!";
            $result = false;
            }
            else
                $result = true;
    }
}

$register = new signUp();
    $register->validate();
    $register->nameCHeck();
    $register->emailCheck();
    $register->passwordCheck();
    $register->confirmCheck();
/*
    if(isset($_POST['submit']) && isset($name) && isset($username) && isset($email) && isset($password) && isset($confirmPwd)){
        if(empty($name)){
            $nameErr = "This Name field Is Required";
            $success = false;
       }
        elseif(!preg_match("/^[a-zA-Z ]*$/" ,$name)){
            $nameErr = "<div class='nameSide'>Only Letters and whitespaces are allowed</div>";
            $success = false;
           }
           else
            $name = test_input($_POST["name"]);
            $success = false;

        if(empty($username)){
            $usernameErr = "*Please fill out this field";
           }
           elseif(strlen($username) > 20){
               $usernameErr = "*Username is too long";
               $success = false;
           }
           else
                $username = test_input($_POST["usrname"]);

        if(empty($email)){
            $emailErr = "Email Field  is required";
          }

        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid Email Format";
                }
                else
                    $email = test_input($_POST["email"]);
            
            if(empty($password)){
             $passwordErr = "*Please enter a password";
            }
            elseif(strlen($password) > 20){
                $passwordErr = "*Password is too long, please check!!";
                $success = false;
            }
            else
                $password = test_input($_POST["password"]);
                
            if(empty($confirmPwd)){
                $confirmPwdErr = "Please enter your password";
                $success = false;
            }
                elseif($password !== $confirmPwd){
                    $confirmPwdErr = "Password does not match!";
                    }

                else{
                   $success = true;
                   $registerationForm = "<div class='successMsg'>Thank you your information has been sent, you are now being redirected to your dashboard.</div>";
               }
            }
               else
                    $errorMsg = "One or more fields are empty, please check.";
               
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                      }
                    
            if ($success == false ) {
                $registerationForm = <<<Form
<a href="home.html"><img src="logo.png" alt="" class="site-logo"></a>
                <div class="content-container" style="overflow:visible;">
                  <div class="pageParent">
                      <h1 class="pageHeader">Register</h1>
                      <span>$errorMsg </span>
                      </div>
                      <form action="register.php" method="POST" autocomplete="off">
                    <div class="input-container">
                          <input type="text" name="name" required>
                          <span class="error">$nameErr</span>
                      </div>
              
                      <div class="input-container">
                          <input type="text" name="usrname" required>
                          <span class="error">$usernameErr</span>
                       </div>
              
                       <div class="input-container" >
                          <input type="email" name="email" required>
                          <span class="error">$emailErr</span>
                       </div>
              
                       <div class="input-container" >
                          <input type="password" name="password" required>
                          <span class="error">$passwordErr</span>
                        </div>
              
                       <div class="input-container">
                          <input type="password" name="confirmpwd" required>
                          <span class="error">$confirmPwdErr</span>
                        </div>
              
                        <div class="radiobtn-container">
                        <div class="radioBtn"><input type="radio" name="radiobtn" value="Individual[Searching]">Individual[Searching]</div>
                        <div class="radioBtn"><input type="radio" name="radiobtn">Property Owner</div>
                        <div class="radioBtn"><input type="radio" name="radiobtn">Estate Agent</div>
                        <div class="radioBtn"><input type="radio" name="radiobtn">Property Developer</div>
                        </div>          
                      <input type="submit" value="Submit" name="submit">
                      </form>
                      <div class="login-link">
                            Already A Member? <a href="login.html" class="enter">SignIn</a>
                      </div>
                </div>
Form;
            }

            echo $registerationForm;
*/

?>