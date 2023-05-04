<?php
	// will allow a student to view their reports
	// these values are for demonstration only: they will be drawn from session in live version
	$studentid = 1;
	$reportid = 27;

	session_start();
	require_once "dbconnect.php";

	$query = "SELECT * FROM REPORT";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_OBJ);
	$firstreport = $row->HoursCompleted;
	$row = $stmt->fetch(PDO::FETCH_OBJ);
	$secondreport = $row->HoursCompleted;

?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>evaluate reports</title>
	<style>
	td,th{
		border: 1px solid #cfcfcf;
		padding: 8px;
		text-align: center;
	}
	body{
		width:20%;
   		margin:auto;
   		border-radius: 5px;
   		background-color: #FFFFFF;
   		padding: 20px;
   		border: 50px solid #B71C1C;
		position:relative;
		text-align: center;
	}
	h1{
		color:#B71C1C;
	}
	table{
		margin-right: auto;
		margin-left: auto;
	}
	</style>

</head>

<body>
<h1>Your Pending Reports</h1>
<table>
<tr>
	<th>Hours</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>internship type</th>
</tr>
<?php
$query = "SELECT * FROM REPORT WHERE ID = " . $reportid;
$stmt = $con->prepare($query);
$stmt->execute();
$row_num = 0;
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			$newstring = "<tr>";
			$newstring .= "<td>" . $row->HoursCompleted . "</td>";
			$newstring .= "<td>" . $row->StartDate . "</td>";
			$newstring .= "<td>" . $row->EndingDate . "</td>";
			$newstring .= "<td>" . $row->InternshipTypeID . "</td>";
			if($row->SiteSupApprovalStatus == 0){
				// student is able to edit because no supervisors have approved
				$newstring .= "<td><a href='student_edit_report.php'>Edit Report</a></td>";
			}
			$newstring .= "</tr>";
			echo $newstring;
			$row_num += 1;
		}
?>
</table>
</body>