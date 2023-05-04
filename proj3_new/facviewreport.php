<?php
session_start();
require_once "dbconnect.php";

$reportid = 0;
$fname = "";
$lname = "";
$hourscomplete = 0;
$startdate = "";
$enddate = "";

$report = $_GET['student'];

$query = "SELECT * FROM REPORT  WHERE SiteSupApprovalStatus = 1 AND FacSupApprovalStatus = 0";
$stmt = $con->prepare($query);
$stmt->execute();
$row_num = 0;
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
	if($row_num == $report){
		$reportid = $row->ID;
		$hourscomplete = $row->HoursCompleted;
		$fname = $row->StudentFirstName;
		$lname = $row->StudentLastName;
		$startdate = $row->StartDate;
		$enddate = $row->EndingDate;
	}
	$row_num += 1;
}

// placeholder link
$temp = "testviewreport.php?student=" . $report;
$_SESSION['reportid'] = $reportid;

?>

<body>
<form action="facconfirmreport.php">
REPORT FOR <?php echo $fname ?><br>
First name: <?php echo $fname ?><br>
Last name: <?php echo $lname; ?><br>
Hours Copmleted: <?php echo $hourscomplete; ?><br>
Start Date: <?php echo $startdate; ?><br>
Ending Date: <?php echo $enddate; ?><br>

<label for="approve_report">Approve</label>
<input type="radio" id="approve_report" name="adreport" value="approve">
<label for="deny_report">Deny</label>
<input type="radio" id="deny_report" name="adreport" value="deny"><br>
<input type="button" value="back" onclick="window.location.href='evaluate_reports_faculty.php';"><input type="submit"></input>
</form>
</body>