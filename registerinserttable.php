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
$user_name = mysqli_real_escape_string($link, $_REQUEST['name']);
$profession = mysqli_real_escape_string($link, $_REQUEST['profession']);
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$program = mysqli_real_escape_string($link, $_REQUEST['program']);
$expectation = mysqli_real_escape_string($link, $_REQUEST['expectation']);
 
// Attempt insert query execution
$sql = "INSERT INTO RegisterForm (username, profession, company, program, expectation) VALUES ('$user_name', '$profession', '$company', '$program', '$expectation')";
if(mysqli_query($link, $sql)){
    echo "Your request has been received";
    header("Location:https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=EGUBQN69GLV3A"); /* Redirect browser */
exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>
</body>
</html>