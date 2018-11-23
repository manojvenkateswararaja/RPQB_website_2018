<html>
<body>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "Rpqb$2018", "rapidqube");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user_name = mysqli_real_escape_string($link, $_REQUEST['f_name']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$details = mysqli_real_escape_string($link, $_REQUEST['details']);
 
// Attempt insert query execution
$sql = "INSERT INTO EnquiryForm (email, username, company, phone, details) VALUES ('$user_name', '$company', '$email', '$phone', '$details')";
if(mysqli_query($link, $sql)){
    echo "Your request has been received we will get back to you soon";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>
</body>
</html>