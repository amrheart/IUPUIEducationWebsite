<?php

session_start();
require_once "dbconnect.php";

// these values are for demonstration only: they will be drawn from session in live version
$studentid = 1;
$reportid = 27;
$_SESSION['reportid'] = $reportid;

$query = "SELECT * FROM REPORT WHERE ID = " . $reportid;
$stmt = $con->prepare($query);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_OBJ)


?>

<body>
<h1>Edit Report</h1><br>
<form action="student_edit_report_confirmation.php">
Hours: <input type="number" value="<?php echo $row->HoursCompleted; ?>" name="hours" min=0 required></input><br>
Start Date: <input type="date" value="<?php echo $row->StartDate; ?>" name="startdate" required></input><br>
End Date: <input type="date" value="<?php echo $row->EndingDate; ?>" name="enddate" required></input><br>
Internship Type: <input type="number" value="<?php echo $row->InternshipTypeID; ?>" name="internid" min=1 max=2 required></input><br>
<input type="button" value="back" onclick="window.location.href='student_view_reports.php';" ><input type="submit">
</form>
</body>