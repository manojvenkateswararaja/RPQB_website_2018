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
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$username = mysqli_real_escape_string($link, $_REQUEST['name']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$phonenumber = mysqli_real_escape_string($link, $_REQUEST['phonenumber']);
$details = mysqli_real_escape_string($link, $_REQUEST['details']);
 
$sql = "INSERT INTO enquiry (email, username, companyname,phonenumber,details)
VALUES ('$email','$username','$company','$phonenumber','$details')";

if ($conn->query($sql) === TRUE) {
    function sweet (){
        swal("Good job!");
        }
//  $message = "Your Record has been saved sucessfully.";
//  echo "<script>";
// echo 'setTimeout(function () { swal("Greetings $name!","Thank you for adding your business details.<br>Our admin team will review the same and will publish shortly..!","success");';
// echo '}, 100);</script>';
// echo "swal('Greetings $message!')";
// echo "<script type='text/javascript'>alert('$message');</script>";
//echo 'setTimeout(function () { swal("Greetings ' . $message . '!","Thank you for adding your business details.<br>Our admin team will review the same and will publish shortly..!","success");';
    // echo "Record created successfully";
 

    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
