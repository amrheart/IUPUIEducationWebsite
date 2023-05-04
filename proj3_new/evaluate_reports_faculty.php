<!--
TITLE: evaluate reports form (for faculty and site supervisor)
AUTHOR: Alexander Reinhardt (AR)
CREATE DATE: 28 Sep 2021
PURPOSE: provide a page for faculty and site supervisors to evaluate student track hours logs
LAST MODIFIED ON: 28 Sep 2021
LAST MODIFIED BY: Alexander Reinhardt (AR)
MODIFICATION HISTORY:
26 Sep 2021: created (AR)
-->

<?php
	session_start();
	require_once "dbconnect.php";

	$query = "SELECT * from REPORT";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_OBJ);
	$firstreport = $row->HoursCompleted;
	$row = $stmt->fetch(PDO::FETCH_OBJ);
	$secondreport = $row->HoursCompleted;
?>

<html lang="en">
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>evaluate reports</title>
	<style>
	td,th{
		border: 1px solid #cfcfcf;
		padding: 8px;
		text-align: center;
	}
	#panel{
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
	<div id="panel">
	<h1>Evaluate Reports</h1>
	<form action="facviewreport.php">
	<table>
	    <tr>
		<th>View Reports</th>
		<th>Student Names</th>
		<th>Hours</th>
	    </tr>
	    <?php
		$query = "SELECT * FROM REPORT  WHERE SiteSupApprovalStatus = 1 AND FacSupApprovalStatus = 0";
		$stmt = $con->prepare($query);
		$stmt->execute();
		$row_num = 0;
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<tr>" . "<td><a href=" . '"' . "facviewreport.php?" . "student=" . strval($row_num) . '"' . ">" . "View Report </a></td>". "<td>" . $row->StudentFirstName . "</td>" . "<td>" . $row->HoursCompleted . "</td><tr>";
			$row_num += 1;
		}
	    ?>
	</table>
	<input type="button" value="Back" onclick="window.location.href='evaluate_reports_faculty.php';">
	<input type="submit">
	</form>
	</div>
</body>