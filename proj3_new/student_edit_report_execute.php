<?php
session_start();
require_once "dbconnect.php";

$hours = $_SESSION['hours'];
$startdate = $_SESSION['startdate'];
$enddate = $_SESSION['enddate'];
$internid = $_SESSION['internid'];

$reportid = $_SESSION['reportid'];

$msg = "";
$query = "UPDATE REPORT SET";
$query .= " HoursCompleted = " . $hours;
$query .= " ,StartDate = " . "'" . $startdate . "'";
$query .= " ,EndingDate = " . "'" . $enddate . "'";
$query .= " ,InternshipTypeID = " . $internid;
$query .= " ,Rejected = 0";
$query .= " WHERE ID = " . $reportid;
$stmt = $con->prepare($query);
if($stmt->execute()){
	// connected successfully
	$msg = "Report Updated Successfully";

}
else{
	// could not connect
	$msg = "Something Went Wrong";
}


?>

<body>
<?php echo $msg; ?><br>
<input type="button" value="Continue" onclick="window.location.href='student_view_reports.php';">
</body>