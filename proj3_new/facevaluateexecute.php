<?php

$msg = "";

session_start();
require_once "dbconnect.php";

$reportid = $_SESSION['reportid'];
$decision = $_SESSION['decision'];

if(strcmp($decision, "approve") == 0){
	// change the approval status of the report
	$query = "UPDATE REPORT SET FacSupApprovalStatus = 1 WHERE ID = " . $reportid;
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		// connected successfully
		$msg = "Report Approved Successfully";

	}
	else{
		// could not connect
		$msg = "Something Went Wrong";
	}
}
elseif(strcmp($decision, "deny") == 0){
	// need to uncheck site supervisor approval and send an email to site supervisor
	$query = "UPDATE REPORT SET SiteSupApprovalStatus = 0 WHERE ID = " . $reportid;
	$stmt = $con->prepare($query);
	if($stmt->execute()){
		// connected successfully
		$msg = "Report Denied Successfully";

		// attempt to email the Site supervisor
		// I'll use my email for the time being
		$email = "reinhara@iu.edu";
		$subject = "Report needs reviewing";
		$body = "A Report Needs to be Reviewed. Report ID: " . $reportid;
		if(mail($email, $subject, $body)){
			$msg2 = "Site Supervisor has been emailed";
		}
		else{
			$msg2 = "Email Failed";
		}

	}
	else{
		// could not connect
		$msg = "Something Went Wrong";
	}

}
else{
	$msg = "Something Went Wrong";
}

?>

<body>
<?php echo $msg ?><br>
<input type="button" value="Continue" onclick="window.location.href='evaluate_reports_faculty.php';" >
</body>