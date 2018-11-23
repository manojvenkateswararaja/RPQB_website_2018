<?php
$servername = "localhost";
$username = "root";
$password = "Rpqb$2018";
$dbname = "rapidqube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE RegisterForm (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(50) NOT NULL,
profession VARCHAR(50) NOT NULL,
company VARCHAR(50),
program VARCHAR(10) NOT NULL,
expectation VARCHAR(100) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table RegisterForm created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>