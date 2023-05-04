<?php

$msg = "";
$msg2 = "";

session_start();
require_once "dbconnect.php";

$reportid = $_SESSION['reportid'];
$decision = $_SESSION['decision'];

// if the decision was to accept the report as valid proceed with checking it off
if(strcmp($decision, "approve") == 0){

	// change the approval status of the report
	$query = "UPDATE REPORT SET SiteSupApprovalStatus = 1 WHERE ID = " . $reportid;
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		// connected successfully
		$msg = "Report Approved Successfully";
	}
	else{
		// could not connect
		$msg = "Something Went Wrong";
	}

	// attempt to email the faculty supervisor
	// I'll use my email for the time being
	$email = "reinhara@iu.edu";
	$subject = "New Report Ready for Approval";
	$body = "New report approved by site supervisor.";
	if(mail($email, $subject, $body)){
		$msg2 = "Faculty Supervisor has been emailed";
	}
	else{
		$msg2 = "Email Failed";
	}

}
elseif(strcmp($decision, "deny") == 0){
	$query = "UPDATE REPORT SET Rejected = 1 WHERE ID = " . $reportid;
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		// connected successfully
		$msg = "Report Denied successfully";
	}
	else{
		// could not connect
		$msg = "Something Went Wrong";
	}

	
}// end else if
else{
	$msg = $decision;
}

?>

<body>
<?php echo $msg ?><br>
<?php echo $msg2 ?><br>
<input type="button" value="Continue" onclick="window.location.href='testevaluate.php';" >
</body>