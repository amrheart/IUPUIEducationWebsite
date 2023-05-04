<?php
	require_once "dbconnect.php";
	session_start();
	$next_page = "hour_reporting.php";
	$file = "";
	$msg = "";
	$link_text = "";
	$link_text2 = "";
	$query_insurance = "SELECT * FROM STUDENT_GLOBAL_PDF WHERE PDFTypeID = 1 AND StudentID = 1";
	$query_agreement = "SELECT * FROM STUDENT_GLOBAL_PDF WHERE PDFTypeID = 2 AND StudentID = 1";

	$stmt = $con->prepare($query_insurance);
	$stmt->execute(array(1));

	// student has a file already in the database
	if($row = $stmt->fetch(PDO::FETCH_OBJ))	{
		$msg = $row->FileName;
		$link_text = "<input type='checkbox' id='checkinsurace' name='insurance' value='agreed' required>" . "Use most recent liability insurance file?" . "<a href=" . $msg . ">View most recent insurance liability form</a>" . "<br>" . "Or browse for a file";

	}
	// student does not have a file in the database
	else{
		$msg = "No file on record";
		$link_text = "No Previous Files On Record";
	}


	$stmt = $con->prepare($query_agreement);
	$stmt->execute(array(1));

	if($row = $stmt->fetch(PDO::FETCH_OBJ))	{
		$msg = $row->FileName;
		$link_text2 = "<input type='checkbox' id='checkagreement' name='agreement' value='agreed' required>" . "Use most recent liability insurance file?" . "<a href=" . $msg . ">View most recent agreement form</a>" . "<br>" . "Or browse for a file";

	}
	// student does not have a file in the database
	else{
		$msg = "No file on record";
		$link_text2 = "No Previous Files On Record";
	}


	$selected_file = "";
	

?>

<!--
TITLE: liability and agreement form
AUTHOR: Alexander Reinhardt (AR)
CREATE DATE: 26 Sep 2021
PURPOSE: provide a page for a student to submit a liability insurance form and experience agreement form
LAST MODIFIED ON: 26 Sep 2021
LAST MODIFIED BY: Alexander Reinhardt (AR)
MODIFICATION HISTORY:
26 Sep 2021: created (AR)
-->

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>liability and agreement</title>
	
	<style>
	#panel{
	width:50%;
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
	<form action=<?php echo $next_page; ?> method="get">
		<div id="panel">
		<?php print($query_insurance); ?></br>
		<?php print($msg); ?>
		 <h1>Liability Insurance and Experience Agreement</h1>
		 <div id="insurance_input">
		  Note: before beginning a new hours log entry, you must first select or upload proof of liability insurance and a signed copy of the field experience agreement form.<br><br>
		  <label for="insurance">Liability Insurance File:</label>

		  <?php echo $link_text; ?><br> <!-- This link will show the user their most recently uploaded file. This text will not show up if student has no recent files -->

		  <input type="file" accept=".pdf, image/jpeg" id="insuranceinput" name="insuranceinput"> (choose a new liability insurance file, PDF or JPEG)
		 </div>
		  <br>
		 <div id="agreement_input">
		  <label for="agreement">Experience Agreement File:</label>
		  
		  <?php echo $link_text2; ?><br>

		  <input type="file" accept=".pdf, image/jpeg"> (choose a new experience agreement file, PDF)
		 </div>
		  <br>
		 <input type="button" value="Back"><input type="submit" value="Submit">
		</div>
	</form>
</body>