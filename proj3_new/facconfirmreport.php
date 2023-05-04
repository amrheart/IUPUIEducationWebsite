<?php

session_start();
require_once "dbconnect.php";

$reportid = $_SESSION['reportid'];
$decision = $_GET['adreport'];
$_SESSION['decision'] = $decision;

?>

<body>
Are you sure you wish to <?php echo $decision; ?> this report: Report ID <?php echo $reportid; ?><br>
<input type="button" onclick="window.location.href='evaluate_reports_faculty.php';" value="Cancel"><input type="button" value="Continue" onclick="window.location.href='facevaluateexecute.php';">
</body>
