<?php
session_start();
class Recover{
    public $myemail;
      
    public function __construct(){
        $this->myemail = $_POST['email'];
}

    public function confirm(){
        $resultI;
        if (empty($this->myemail)) {
            $resultI = false;
        }
        else{
            $resultI = "<h1>congratulations</h1>";
        }
        return $resultI;
    }
}
            
$maybe = new Recover();
    echo $maybe->confirm();

?>


<?php
    /*$email = check_input($_POST['email']);
    $submit = $_POST['submitBtn'];

if(isset($_POST['submitBtn']) && isset($email) ){
    if(empty($_POST["email"])){
        $emailErr = "*Email Field  is required";
      }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "*Invalid Email Format";
                $success = false;
            }
        else{
            $success = true; 
            $recoveryForm = "<div class='successMsg'>A Password Recovery Link Has Been Sent To Your Email</div>"; 
        }
    
}
    else 
    $errorMsg = "Please enter your Email Address" ; 


    function check_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  

if($success == false ){
    $recoveryForm = <<<myForm
<a href="home.html"><img src="logo.png" alt="" class="site-logo"></a>
    <div class="parent">
        <h1 class="header">Recover Your Password</h1>
        <!--Input field section for the page-->
        <form action="recovery.php" method="POST" autocomplete="off">
            <div class="txt_field">
                <input type="text" name="email" required>
                <span class="error">$emailErr</span>
            </div>
            <input type="submit" value="Submit" name="submitBtn">
            <div class="register-link">
                Not A Member? <a href="registration.html" class="sign">SignUp</a>
            </div>
        </form>
    </div>
myForm;
}      

    echo $recoveryForm;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Recovery</title>
    <link rel="stylesheet" href="style.css">
</head>
</html>