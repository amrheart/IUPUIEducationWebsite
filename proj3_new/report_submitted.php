<?php
session_start();
require_once "dbconnect.php";
// This file will try to send the report to the database
// will tell use if it succeeded or failed

$msg = "";

$total = $_SESSION['total'];
$date = date("Y-m-d");
$startdate = $_SESSION['hrstartdate'];
$enddate = $_SESSION['hrenddate'];
$fname = $_SESSION['hrfname'];
$lname = $_SESSION['hrlname'];

$query = "INSERT INTO REPORT (InternshipApplicationID, DateOfReport, HoursCompleted, SiteSupApprovalStatus, FacSupApprovalStatus, StartDate, EndingDate, InternshipTypeID, StudentFirstName, StudentLastName) VALUES (1, '$date', $total, 0, 0, '$startdate', '$enddate', 2, '$fname', '$lname')";

// send the report to the data base
$stmt = $con->prepare($query);
if($stmt->execute(array(1))){
	$msg = "report submitted";
}
else{
	$msg = "report not submitted, something went wrong.";
}

// attempt to email the site supervisor
// I'll use my email for the time being
$email = "reinhara@iu.edu";
$subject = "New Report";
$body = "New Report Submitted by " . $fname;
$msg2 = "";
if(mail($email, $subject, $body)){
	$msg2 = "Site Supervisor has been emailed";
}
else{
	$msg2 = "Email Failed";
}

?>

<body>
<?php echo $msg; ?><br>
<?php echo $msg2; ?>
</body>