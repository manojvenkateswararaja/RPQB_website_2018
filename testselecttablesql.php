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

$sql = "SELECT id, email, username, companyname,phonenumber,details,reg_date  FROM enquiry";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"]. " , Name: " . $row["email"]. ", Company: " . $row["username"].  ", Email: " . $row["company"]. ", Phone:" . $row["phone"]. ", Details:" . $row["details"]. "<br>";
       echo "<h3><b>Details:</b></h3>";
        echo "<table border='1'>

        <tr>
        
        <th>Id</th>
        
        <th>Email</th>
        
        <th>UserName</th>
        
        <th>CompanyName</th>

        <th>phonenumber</th>

        <th>details</th>
        <th>Reg_date</th>
        
        </tr>";
        
         
        
        while($row = $result->fetch_assoc())
        
          {
        
          echo "<tr>";
        
          echo "<td>" . $row['id'] . "</td>";
        
          echo "<td>" . $row['email'] . "</td>";
        
          echo "<td>" . $row['username'] . "</td>";
        
          echo "<td>" . $row['companyname'] . "</td>";

          echo "<td>" . $row['phonenumber'] . "</td>";

          echo "<td>" . $row['details'] . "</td>";

          echo "<td>" . $row['reg_date'] . "</td>";
          
        
          echo "</tr>";
        }

        echo "</table>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>