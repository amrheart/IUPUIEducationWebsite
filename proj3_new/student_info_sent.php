<?php
	// what i still need to do:
	// file that leads here: student info upload 
	// add variables to session so they can be accessed here
	session_start();
	require_once "dbconnect.php";

	$fname = $_SESSION['nsfname'];
	$mname = $_SESSION['nsmname'];
	$lname = $_SESSION['nslname'];
	$email = $_SESSION['nsemail'];
	$password = $_SESSION['nspassword'];
	$pdf1 = $_SESSION['nspdf1'];
	$pdf2 = $_SESSION['nspdf2'];
	$date1 = $_SESSION['nsdate1'];
	$date2 = $_SESSION['nsdate2'];
	$address = $_SESSION['nsaddress'];
	$state = $_SESSION['nsstate'];
	$zip = $_SESSION['nszip'];
	$username = $_SESSION['nsusername'];
	$aptnum = $_SESSION['nsaptnum'];
	$phone = $_SESSION['nsphone'];
	$activestatus = $_SESSION['nsactivestatus'];
	
	print($fname);

	$query = "INSERT INTO STUDENT (FirstName, MiddleName, LastName, Email, Password, InsurancePDFUploadStatus, AgreementPDFUploadStatus, InitialLoginDate, LastLoginDate, StreetAddress, State, Zip, Username, AptNumber, PhoneNumber, ActiveStatus) VALUES ('$fname', '$mname', '$lname', '$email', '$password', $pdf1, $pdf2, '$date1', '$date2', '$address', '$state', $zip, '$username', $aptnum, $phone, $activestatus)";
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		print("student data sent");
	}
	else{
		print("Failed to send");
		print(mysql_error());
	}

	print($lname);

?>

<body>
<h1>Student Data Submitted</h1>
</body>