<?php
$servername ="localhost";
$username ="mhyrakle";
$password ="oluwapelumi";
$dbName = "comcraft_property";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error); 
}

echo "connection success";

$sql = "CREATE TABLE properties(
    propertiesId INT,
    title VARCHAR(45),
    descriptions TEXT(5000),
    property_address VARCHAR(45),
    townOrcity VARCHAR(45),
    localGovt VARCHAR(45),
    p_state VARCHAR(45),
    country VARCHAR(45),
    categories VARCHAR(10),
    p_type VARCHAR(20),
    price DECIMAL(10,2),
    reg_date DATE,
    users_userId INT,
    CONSTRAINT perPerson FOREIGN KEY (users_userId)
    REFERENCES users(usersId)
    )";

if ($conn->query($sql) == true) {
    echo "Table  created successfully";
}
else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>