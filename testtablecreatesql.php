<?php
$servername = "localhost";
$username = "root";
$password = "Rpqb$2018";
$dbname = "testingtable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE enquiry (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
companyname VARCHAR(50),
phonenumber VARCHAR(10),
details VARCHAR(100),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>