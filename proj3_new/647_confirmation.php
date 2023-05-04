<?php
	session_start();
	require_once "dbconnect.php";
	$hic = 0;
	$hgc = 0;
	$haet = 0;
	$hoc1 = 0;

	$hits = 0;
	$hgs = 0;
	$hpep = 0;
	$hrpr = 0;
	$hrwcn = 0;
	$hccs = 0;
	$hoc2 = 0;

	$hic = $_GET['hic'];
	$hgc = $_GET['hgc'];
	$haet = $_GET['haet'];
	$hoc1 = $_GET['hoc1'];

	$hits = $_GET['hits'];
	$hgs = $_GET['hgs'];
	$hpep = $_GET['hpep'];
	$hrpr = $_GET['hrpr'];
	$hrwcn = $_GET['hrwcn'];
	$hccs = $_GET['hccs'];
	$hoc2 = $_GET['hoc2'];

	$total = $hic + $hgc + $haet + $hoc1 + $hits + $hgs + $hpep + $hrpr + $hrwcn + $hccs + $hoc2;
	$_SESSION['total'] = $total;
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
	<form action="report_submitted.php">
	<?php print($total) ?>
	<h1>Is This Information Correct?</h1>
	Individual Counseling: <?php print($hic) ?><br>
	Group Counseling: <?php print($hgc) ?><br>
	Assessment/Evaluation/Testing: <?php print($haet) ?><br>
	Other Categories: <?php print($hoc1) ?><br>

	Individual/Triadic Supervision: <?php print($hits) ?><br>
	Group Supervision: <?php print($hgs) ?><br>
	Professional/Educational Presentations: <?php print($hpep) ?><br>
	Research/Professional Reading: <?php print($hrpr) ?><br>
	Report Writing/Case Notes: <?php print($hrwcn) ?><br>
	Case Conference/Staffing: <?php print($hccs) ?><br>
	Other Categories: <?php print($hoc2) ?><br>
	<input type="button" value="Back" onclick="window.location.href='hour_reporting_G647.php';">
	<input type="submit" value="Continue">
	</form>
</body>