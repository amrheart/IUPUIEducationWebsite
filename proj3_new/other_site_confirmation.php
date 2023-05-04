<?php
session_start();
require_once "dbconnect.php";

$new_site = $_GET['newsite'];
$_SESSION['hrsite'] = $new_site;
$msg = "";
$msg2 = "";

$query = "INSERT INTO LOCATION (Name, ActiveStatus, PlacementTypeID) VALUES ('$new_site', 0, 1)";
$stmt = $con->prepare($query);
if($stmt->execute()){
	$msg2 = "Site added";
	// email the admin
	$email = "reinhara@iu.edu";
	$subject = "New Site";
	$body = "Other site has been submitted by student: " . $new_site;
	if(mail($email, $subject, $body)){
		$msg = "Admin Has Been Emailed";
	}
	else{
		$msg = "Email Failed";
	}
}
else{
	$msg2 = "Site not added";
}



?>

<body>
<?php echo $msg; ?><br>
<?php echo $msg2; ?><br>
<input type="button" value="continue" onclick="window.location.href='hour_reporting_confirmation.php';">
</body>