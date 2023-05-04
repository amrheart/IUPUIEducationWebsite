<?php
	session_start();

	$message = "";
	$fname = "";
	$mname = "";
	$lname = "";
	$email = "";
	$password = "";
	$pdf1 = 0;
	$pdf2 = 0;
	$date1 = 0;
	$date2 = 0;
	$address = "";
	$state = "";
	$zip = 0;
	$username = "";
	$aptnum = 0;
	$phone = 0;
	$activestatus = 0;
	$student_values = array();
	$file_name = "http://corsair.cs.iupui.edu:24891/Course_project/test1.csv";
	if(True){
		// $file_name = $_GET['exsheet'];
		$row = 1;
		if (($opened_file = fopen($file_name, "r")) !== FALSE) {
    			(($student_data = fgetcsv($opened_file, 1000, ",")) !== FALSE);
        		foreach ($student_data as $cur_data){
				array_push($student_values, $cur_data);
			}
    			fclose($opened_file);
		}
		$message = "Does this info look correct?";
		$fname = $student_values[0];
		$mname = $student_values[1];
		$lname = $student_values[2];
		$email = $student_values[3];
		$password = $student_values[4];
		$pdf1 = $student_values[5];
		$pdf2 = $student_values[6];
		$date1 = $student_values[7];
		$date2 = $student_values[8];
		$address = $student_values[9];
		$state = $student_values[10];
		$zip = $student_values[11];
		$username = $student_values[12];
		$aptnum = $student_values[13];
		$phone = $student_values[14];
		$activestatus = $student_values[15];

		// set session variables
		// ns stands for new student
		$_SESSION['nsfname'] = $fname;
		$_SESSION['nsmname'] = $mname;
		$_SESSION['nslname'] = $lname;
		$_SESSION['nsemail'] = $email;
		$_SESSION['nspassword'] = $password;
		$_SESSION['nspdf1'] = $pdf1;
		$_SESSION['nspdf2'] = $pdf2;
		$_SESSION['nsdate1'] = $date1;
		$_SESSION['nsdate2'] = $date2;
		$_SESSION['nsaddress'] = $address;
		$_SESSION['nsstate'] = $state;
		$_SESSION['nszip'] = $zip;
		$_SESSION['nsusername'] = $username;
		$_SESSION['nsaptnum'] = $aptnum;
		$_SESSION['nsphone'] = $phone;
		$_SESSION['nsactivestatus'] = $activestatus;
	}

?>

<head>
	<style>
	body{
	width:25%;
	height:50%;
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
	<form action="student_info_sent.php">
		<?php print($file_name); ?>
		<h1>Upload student data using excel spreadsheet</h1>
		<!-- file input will only allow for excel file types --->
		<input type="file" accept=".xlsx, .xlsb, .xls, .csv" name="exsheet" required>Please upload an excel sheet with student info</input><br>
		<header><?php print($message); ?><header><br>
		First Name: <?php print($fname); ?><br>
		Middle Name: <?php print($mname); ?><br>
		Last Name: <?php print($lname); ?><br>
		Password: <?php print($password); ?><br>
		Email: <?php print($email); ?><br>
		Insurance PDF: <?php print($pdf1); ?><br>
		Agreement PDF: <?php print($pdf2); ?><br>
		First Login: <?php print($date1); ?><br>
		Last Login: <?php print($date2); ?><br>
		Address: <?php print($address); ?><br>
		State: <?php print($state); ?><br>
		Zip: <?php print($zip); ?><br>
		Username: <?php print($username); ?><br>
		Apartment num: <?php print($aptnum); ?><br>
		Phone: <?php print($phone); ?><br>
		Active status: <?php print($activestatus); ?><br>
	<input type="submit"></input>
	<input type="button" value="Continue"></input>
	</form>
</body>