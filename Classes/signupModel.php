<?php

class signUpModel{

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
            print "Database connection failed " . $e->getMessage() . "<br>";
            die();
          }
      }

    #this method opens the connection to the database columns and setting assigning them to the form variables
    protected function registerUser($name, $username, $email, $tel, $password, $type){
        $sqlQuery = $this->connect()->prepare('INSERT INTO users (name, username, email,  tel, password, status) VALUES (?, ?, ?, ?, ?, ?)');

        #this is a standard password hashing
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        if (!$sqlQuery->execute(array($name, $username, $email, $tel, $hashPassword, $type))) {
            header("location: ../index.php?error=registrationfailed");
            exit();
        }

        $sqlQuery = null;
    }

    #this method checks if the user already exists in the database
    protected function checkIfRegistered($username, $email){
        $sqlQuery = $this->connect()->prepare('SELECT username, email FROM users WHERE username = ? OR email = ?;');
        if (!$sqlQuery->execute(array($username, $email))) {
            header("location: ../index.php?error=notRegistered");
            exit();
        }

        $resultCheck;
        #checking to see if the '$stmt' property returned any value from the database query
        if($sqlQuery->rowCount() > 0){
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }

        return $resultCheck;
    }
}


