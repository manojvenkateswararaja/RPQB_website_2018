<?php
	$emailDetails = array();
	parse_str($_POST['email_details'], $emailDetails);
	//print_r($emailDetails);
	$email =  $emailDetails['email'];
	$f_name =  $emailDetails['f_name'];
	$l_name =  $emailDetails['l_name'];
	$company =  $emailDetails['company'];
	$phone =  $emailDetails['phone'];
	$country =  $emailDetails['country'];
	$fld_name =  $emailDetails['fld_name'];

	if(strlen($l_name)>0) {
		$l_name = $l_name;
	} else {
		$l_name = "-";
	}

	if(strlen($company)>0) {
		$company = $company;
	} else {
		$company = "-";
	}
		

	
	//$to = "vignesh.nagarajan@rapidqube.com";
	//$to = "vikram.viswanathan@rapidqube.com";
	$to = "info@rapidqube.com"

		$subject = "Rapidqube Project Enquiry";

		
		$message = "
	<html>
	<head>
	<title>Rapidqube</title>
	</head>
	<body>
	<p>Details</p>
	<table>
	<tr>
	<td>Type</td>
	<td>".$fld_name."</td>
	</tr>
	<tr>
	<td>Email</td>
	<td>".$email."</td>
	</tr>
	<tr>
	<td>First name</td>
	<td>".$f_name."</td>
	</tr>
	<tr>
	<td>Last name</td>
	<td>".$l_name."</td>
	</tr>
	<tr>
	<td>Company</td>
	<td>".$company."</td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>".$phone."</td>
	</tr>
	<tr>
	<td>Country</td>
	<td>".$country."</td>
	</tr>
	</table>
	</body>
	</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html; charset=iso-8859-1" . "\r\n";

		// More headers
		$headers .= 'From: <'.$email.'>' . "\r\n".
				'X-Mailer: PHP/' . phpversion();
		//$headers .= 'Cc: <vikram.viswanathan@rapidqube.com>' . "\r\n";

		if(mail($to,$subject,$message,$headers)) {
			echo 1;
		} else {
			echo 0;
		}


?>