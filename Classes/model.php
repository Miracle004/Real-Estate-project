<?php

class Dbh{

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
        print "Error!: " . $e->getMessage() . ",br>";
        die();
      }
  }
}
?>