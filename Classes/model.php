<?php

class Dbh{

  public function connect(){
    $servername ="localhost";
    $username ="mhyrakle";
    $password ="oluwapelumi";
    $dbName = "comcraft_property";

    #connecting to the database
    $conn = new mysqli($servername, $username, $password, $dbName);

    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error); 
      }

      $conn->close();
  }
}
?>