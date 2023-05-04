<?php
	session_start();
	require_once "dbconnect.php";
	$t0r1c1 = $_GET['t0r1c1'];
	$t0r1c2 = $_GET['t0r1c2'];

	$t1r1c1 = $_GET['t1r1c1'];
	$t1r1c2 = $_GET['t1r1c2'];
	$t1r1c3 = $_GET['t1r1c3'];
	$t1r1c4 = $_GET['t1r1c4'];
	$t1r2c1 = $_GET['t1r2c1'];
	$t1r2c2 = $_GET['t1r2c2'];
	$t1r2c3 = $_GET['t1r2c3'];
	$t1r2c4 = $_GET['t1r2c4'];
	$t1r3c1 = $_GET['t1r3c1'];
	$t1r3c2 = $_GET['t1r3c2'];
	$t1r3c3 = $_GET['t1r3c3'];
	$t1r3c4 = $_GET['t1r3c4'];
	$t1r4c1 = $_GET['t1r4c1'];
	$t1r4c2 = $_GET['t1r4c2'];
	$t1r4c3 = $_GET['t1r4c3'];
	$t1r4c4 = $_GET['t1r4c4'];

	$t2r1c1 = $_GET['t2r1c1'];
	$t2r1c2 = $_GET['t2r1c2'];
	$t2r2c1 = $_GET['t2r2c1'];
	$t2r2c2 = $_GET['t2r2c2'];
	$t2r3c1 = $_GET['t2r3c1'];
	$t2r3c2 = $_GET['t2r3c2'];
	$t2r4c1 = $_GET['t2r4c1'];
	$t2r4c2 = $_GET['t2r4c2'];

	$t3r1c1 = $_GET['t3r1c1'];
	$t3r1c2 = $_GET['t3r1c2'];
	$t3r2c1 = $_GET['t3r2c1'];
	$t3r2c2 = $_GET['t3r2c2'];
	$t3r3c1 = $_GET['t3r3c1'];
	$t3r3c2 = $_GET['t3r3c2'];
	$t3r4c1 = $_GET['t3r4c1'];
	$t3r4c2 = $_GET['t3r4c2'];

	$t4r1c1 = $_GET['t4r1c1'];
	$t4r1c2 = $_GET['t4r1c2'];
	$t4r2c1 = $_GET['t4r2c1'];
	$t4r2c2 = $_GET['t4r2c2'];
	$t4r3c1 = $_GET['t4r3c1'];
	$t4r3c2 = $_GET['t4r3c2'];
	$t4r4c1 = $_GET['t4r4c1'];
	$t4r4c2 = $_GET['t4r4c2'];

	$t5r1c1 = $_GET['t5r1c1'];
	$t5r1c2 = $_GET['t5r1c2'];
	$t5r2c1 = $_GET['t5r2c1'];
	$t5r2c2 = $_GET['t5r2c2'];
	$t5r3c1 = $_GET['t5r3c1'];
	$t5r3c2 = $_GET['t5r3c2'];
	$t5r4c1 = $_GET['t5r4c1'];
	$t5r4c2 = $_GET['t5r4c2'];

	$t6r1c1 = $_GET['t6r1c1'];
	$t6r1c2 = $_GET['t6r1c2'];
	$t6r2c1 = $_GET['t6r2c1'];
	$t6r2c2 = $_GET['t6r2c2'];
	$t6r3c1 = $_GET['t6r3c1'];
	$t6r3c2 = $_GET['t6r3c2'];
	$t6r4c1 = $_GET['t6r4c1'];
	$t6r4c2 = $_GET['t6r4c2'];

	$t7r1c1 = $_GET['t7r1c1'];
	$t7r2c1 = $_GET['t7r2c1'];
	$t7r3c1 = $_GET['t7r3c1'];
	$t7r4c1 = $_GET['t7r4c1'];
	$t7r5c1 = $_GET['t7r5c1'];
	$t7r6c1 = $_GET['t7r6c1'];

	$t8r1c1 = $_GET['t8r1c1'];
	$t8r2c1 = $_GET['t8r2c1'];
	$t8r3c1 = $_GET['t8r3c1'];
	$t8r4c1 = $_GET['t8r4c1'];
	$t8r5c1 = $_GET['t8r5c1'];

	$t9r1c1 = $_GET['t9r1c1'];
	$t9r2c1 = $_GET['t9r2c1'];
	$t9r3c1 = $_GET['t9r3c1'];
	$t9r4c1 = $_GET['t9r4c1'];
	$t9r5c1 = $_GET['t9r5c1'];
	
	$total = $t0r1c1 + $t0r1c2 + $t1r1c1 + $t1r1c2 + $t1r1c3 + $t1r1c4 + $t1r2c1 + $t1r2c2 + $t1r2c3 + $t1r2c4 + $t1r3c1 + $t1r3c2 + $t1r3c3 + $t1r3c4 + $t1r4c1 + $t1r4c2 + $t1r4c3 + $t1r4c4;
	$total = $total + $t2r1c1 + $t2r1c2 + $t2r2c1 + $t2r2c2 + $t2r3c1 + $t2r3c2 + $t2r4c1 + $t2r4c2 + $t3r1c1 + $t3r1c2 + $t3r2c1 + $t3r2c2 + $t3r3c1 + $t3r3c2 + $t3r4c1 + $t3r4c2;
	$total = $total + $t4r1c1 + $t4r1c2 + $t4r2c1 + $t4r2c2 + $t4r3c1 + $t4r3c2 + $t4r4c1 + $t4r4c2 + $t5r1c1 + $t5r1c2 + $t5r2c1 + $t5r2c2 + $t5r3c1 + $t5r3c2 + $t5r4c1 + $t5r4c2;
	$total = $total + $t6r1c1 + $t6r1c2 + $t6r2c1 + $t6r2c2 + $t6r3c1 + $t6r3c2 + $t6r4c1 + $t6r4c2 + $t7r1c1 + $t7r2c1 + $t7r3c1 + $t7r4c1 + $t7r5c1 + $t7r6c1;
	$total = $total + $t8r1c1 + $t8r2c1 + $t8r3c1 + $t8r4c1 + $t8r5c1 + $t9r1c1 + $t9r2c1 + $t9r3c1 + $t9r4c1 + $t9r5c1;
	print($total);

	$date = date("Y-m-d");
	$startdate = $_SESSION['hrstartdate'];
	$enddate = $_SESSION['hrenddate'];
	$fname = $_SESSION['hrfname'];
	$lname = $_SESSION['hrlname'];
	$query = "INSERT INTO REPORT (InternshipApplicationID, DateOfReport, HoursCompleted, SiteSupApprovalStatus, FacSupApprovalStatus, StartDate, EndingDate, InternshipTypeID, StudentFirstName, StudentLastName) VALUES (1, '$date', $total, 0, 0, '$startdate', '$enddate', 1, '$fname', '$lname')";
	$stmt = $con->prepare($query);
	$stmt->execute();
?>
<head>
<style>
	body{
	width:25%;
	height:105%;
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
	<form action="liability_and_agreement.php">
	<h1>Is This Information Correct</h1>
	Age Group Direct Contacts<br>
	0-5 <?php print($t1r1c1); ?> | <?php print($t1r1c2); ?> | <?php print($t1r1c3); ?> | <?php print($t1r1c4); ?><br>
	6-11 <?php print($t1r2c1); ?> | <?php print($t1r2c2); ?> | <?php print($t1r2c3); ?> | <?php print($t1r2c4); ?><br>
	12-14 <?php print($t1r3c1); ?> | <?php print($t1r3c2); ?> | <?php print($t1r3c3); ?> | <?php print($t1r3c4); ?><br>
	15-19 <?php print($t1r4c1); ?> | <?php print($t1r4c2); ?> | <?php print($t1r4c3); ?> | <?php print($t1r4c4); ?><br>

	Teaching and Guidance Lessons<br>
	0-5 <?php print($t2r1c1); ?> | <?php print($t2r1c2); ?><br>
	6-11 <?php print($t2r2c1); ?> | <?php print($t2r2c2); ?><br>
	12-14 <?php print($t2r3c1); ?> | <?php print($t2r3c2); ?><br>
	15-19 <?php print($t2r4c1); ?> | <?php print($t2r4c2); ?><br>

	Career and College Counseling Interventions<br>
	0-5 <?php print($t3r1c1); ?> | <?php print($t3r1c2); ?><br>
	6-11 <?php print($t3r2c1); ?> | <?php print($t3r2c2); ?><br>
	12-14 <?php print($t3r3c1); ?> | <?php print($t3r3c2); ?><br>
	15-19 <?php print($t3r4c1); ?> | <?php print($t3r4c2); ?><br>

	Education Testing<br>
	0-5 <?php print($t4r1c1); ?> | <?php print($t4r1c2); ?><br>
	6-11 <?php print($t4r2c1); ?> | <?php print($t4r2c2); ?><br>
	12-14 <?php print($t4r3c1); ?> | <?php print($t4r3c2); ?><br>
	15-19 <?php print($t4r4c1); ?> | <?php print($t4r4c2); ?><br>

	Student Scheduling and Academic Planning<br>
	0-5 <?php print($t5r1c1); ?> | <?php print($t5r1c2); ?><br>
	6-11 <?php print($t5r2c1); ?> | <?php print($t5r2c2); ?><br>
	12-14 <?php print($t5r3c1); ?> | <?php print($t5r3c2); ?><br>
	15-19 <?php print($t5r4c1); ?> | <?php print($t5r4c2); ?><br>

	Student Orientation and Assemblies<br>
	0-5 <?php print($t6r1c1); ?> | <?php print($t6r1c2); ?><br>
	6-11 <?php print($t6r2c1); ?> | <?php print($t6r2c2); ?><br>
	12-14 <?php print($t6r3c1); ?> | <?php print($t6r3c2); ?><br>
	15-19 <?php print($t6r4c1); ?> | <?php print($t6r4c2); ?><br>

	Race - Ethnicity<br>
	African American: <?php print($t7r1c1); ?><br>
	Asian American: <?php print($t7r2c1); ?><br>
	Hispanic: <?php print($t7r3c1); ?><br>
	White: <?php print($t7r4c1); ?><br>
	Bi-Racial: <?php print($t7r5c1); ?><br>
	Other: <?php print($t7r6c1); ?><br>

	Sexual Orientation<br>
	Heterosexual: <?php print($t8r1c1); ?><br>
	Gay: <?php print($t8r2c1); ?><br>
	Lesbian: <?php print($t8r3c1); ?><br>
	Bisexual: <?php print($t8r4c1); ?><br>
	Other: <?php print($t8r5c1); ?><br>

	Disability<br>
	Physical Disability: <?php print($t9r1c1); ?><br>
	Blind: <?php print($t9r2c1); ?><br>
	Deaf: <?php print($t9r3c1); ?><br>
	Learning Disability: <?php print($t9r4c1); ?><br>
	Developmental Disability:<?php print($t9r5c1); ?><br>
	
	<input type="button" value="Back" onclick="window.location.href='hour_reporting_G524_G550.php';"><input type="submit"></input>
	</form>
</body>