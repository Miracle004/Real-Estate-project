<?php

class signUp extends Dbh{

    #this method opens the connection to the database columns and setting assigning them to the form variables
    public function userSignup($name, $username, $email, $tel, $password){
        $stmt = $this->connect()->prepare('INSERT INTO registered_users (fullname, username, email,  phoneNo, userPassword) VALUES (?, ?, ?, ?, ?)');

        #this is a standard password hashing
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt-execute(array($name, $username, $email, $tel, $hashPassword))) {
            $stmt = null;
            header("location: ../registration.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    #this method checks if the user already exists in the database
    public function checkUser($username, $email){
        $stmt = $this->connect()->prepare('SELECT username FROM registered_users WHERE username = ? OR email = ?;');

        if (!$stmt-execute(array($username, $email))) {
            $stmt = null;
            header("location: ../registration.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        #checking to see if the '$stmt' property returned any value from the database
        if($stmt->rowCount() > 0){
            $resultCheck - false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
?>