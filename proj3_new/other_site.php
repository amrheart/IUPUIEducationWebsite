<?php
session_start();

	$fname = "";
	$lname = "";
	$username = "";
	$IUemail = "";
	$site = "";
	$semester = "";
	$setting = "";
	$ssupervisor = "";
	$supervisoremail = "";
	$fsupervisor = "";
	

	$fname = $_GET['fname'];
	$lname = $_GET['lname'];
	$username = $_GET['username'];
	$IUemail = $_GET['IUemail'];
	$site = $_GET['site'];
	$semester = $_GET['semester'];
	$setting = $_GET['setting'];
	$ssupervisor = $_GET['ssupervisor'];
	$supervisoremail = $_GET['supervisoremail'];
	$fsupervisor = $_GET['fsupervisor'];
	$practicum = $_GET['practicum'];

	// session variables
	$_SESSION['hrfname'] = $fname;
	$_SESSION['hrlname'] = $lname;
	$_SESSION['hrusername'] = $username;
	$_SESSION['hrIUemail'] = $IUemail;
	$_SESSION['hrsite'] = $site;
	$_SESSION['hrsemester'] = $semester;
	$_SESSION['hrsetting'] = $setting;
	$_SESSION['hrssupervisor'] = $ssupervisor;
	$_SESSION['hrsup'] = $fname;
	$_SESSION['hrstartdate'] = $_GET['startdate'];
	$_SESSION['hrenddate'] = $_GET['enddate'];
	$_SESSION['hrpracticum'] = $practicum;
	$_SESSION['hrfsupervisor'] = $fsupervisor;

$loadaction = "";
if($site == "other"){
	// need to get the site name and send an email to admin
	$loadaction = "";
}
else{
	// dont do anything
	$loadaction = "window.location.href='hour_reporting_confirmation.php';";
}
?>
<head>
</head>
<body onload = "<?php echo $loadaction ?>">
<form action="other_site_confirmation.php">
You selected other. Please tell us the name of the site.<br>
<input type="text" name="newsite" required><br>
<input type="submit">
</form>
</body>