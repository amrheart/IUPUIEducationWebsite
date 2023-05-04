<?php
	session_start();
	// nothing for now
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
	
	// session variables
	$fname = $_SESSION['hrfname'];
	$lname = $_SESSION['hrlname'];
	$username = $_SESSION['hrusername'];
	$IUemail = $_SESSION['hrIUemail'];
	$site = $_SESSION['hrsite'];
	$semester = $_SESSION['hrsemester'];
	$setting = $_SESSION['hrsetting'];
	$ssupervisor = $_SESSION['hrssupervisor'];
	$fsupervisor = $_SESSION['hrfsupervisor'];
	$practicum = $_SESSION['hrpracticum'];

	$url = "";
	if($practicum == "G647"){
		$url = "hour_reporting_G647.php";
	}
	else{
		$url = "hour_reporting_G524_G550.php";
	}

?>

<head>
<style>
	body{
	width:25%;
	height:30%;
   	margin:auto;
   	border-radius: 5px;
   	background-color: #FFFFFF;
   	padding: 10px;
   	border: 50px solid #B71C1C;
	position:relative;
	top:50px;
	text-align: center;
	}
	
	h1{
	color:#B71C1C;
	}

</style>
</head>
<body>
	<form action="<?php echo $url ?>">
	<h1>Is this information correct?</h1>
	First Name: <?php print($fname); ?><br>
	Last Name: <?php print($lname); ?><br>
	Username: <?php print($username); ?><br>
	IUemail: <?php print($IUemail); ?><br>	
	Site: <?php print($site); ?><br>
	Semester: <?php print($semester); ?><br>
	Setting: <?php print($setting); ?><br>
	Site Supervisor: <?php print($ssupervisor); ?><br>
	Faculaty Supervisor: <?php print($fsupervisor); ?><br>
	Practicum/Internship: <?php print($practicum); ?><br>

	<input type="button" value="Back" onclick="window.location.href='hour_reporting.php';">
	<input type="submit" value="Continue">
	</form>
</body>