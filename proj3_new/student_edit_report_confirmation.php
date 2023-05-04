<?php
session_start();

$hours = $_GET['hours'];
$startdate = $_GET['startdate'];
$enddate = $_GET['enddate'];
$internid = $_GET['internid'];

$_SESSION['hours'] = $hours;
$_SESSION['startdate'] = $startdate;
$_SESSION['enddate'] = $enddate;
$_SESSION['internid'] = $internid;
?>

<body>
Is this info correct?
<form action="student_edit_report_execute.php">
Hours: <?php echo $hours; ?><br>
Start Date: <?php echo $startdate; ?><br>
End Date: <?php echo $enddate; ?><br>
Internship Type: <?php echo $internid; ?><br>
<input type="button" value="back" onclick="window.location.href='student_view_reports.php';" ><input type="submit">
</form>

</body>