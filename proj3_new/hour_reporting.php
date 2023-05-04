<?php
	session_start();
	require_once "dbconnect.php";


?>

<!--
TITLE: hour reporting form
AUTHOR: Alexander Reinhardt (AR)
CREATE DATE: 26 Sep 2021
PURPOSE: provide a page for a student to enter general info that will lead them to a specific hour reporting form
LAST MODIFIED ON: 26 Sep 2021
LAST MODIFIED BY: Alexander Reinhardt (AR)
MODIFICATION HISTORY:
26 Sep 2021: created (AR)
-->

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>hours reporting general</title>
	<style>
	#panel1{
	width:35%;
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
	<form action="other_site.php">
	<div id="panel1" class="center">
	<h1>Track Hours Log</h1><br>

	Dates of this log entry <br> Beginning on <input type="date" name="startdate" required> and ending on <input type="date" name="enddate" required><br>

	<label for="fname">First Name:</label>
	<input type="text" name="fname" required><br>

	<label for="lname">Last Name:</label>
	<input type="text" name="lname" required><br>

	<label for="username">Username:</label>
	<input type="text" name="username" required><br>

	<label for="IUemail">IUemail:</label>
	<input type="email" name="IUemail" required><br>

	<label for="site">Site:</label>
	
	<select name="site">
	   <?php
		$query = "SELECT * FROM LOCATION WHERE ActiveStatus = 1";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->Name . "</option>";
		}
	   ?>
	   <option>other</option>
	</select>
	<br>

	<label for="semester">Semester:</label>
	
	<select name="semester">
	   <?php
		$query = "SELECT * FROM SUPERVISOR";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->FirstName . "</option>";
		}
	   ?>
	</select>
	<br>

	<label for="setting">Placement Setting:</label>
	
	<select name="setting">
	   <?php
		$query = "SELECT * FROM PLACEMENT_TYPE";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->Name . "</option>";
		}
	   ?>
	</select>
	<br>

	Please select the practicum or internship<br>

	<label for="G524">G524</label>
	<input type="radio" id="G524" name="practicum" value="G524"><br>
	<label for="G550">G550</label>
	<input type="radio" id="G550" name="practicum" value="G550"><br>
	<label for="G647">G647</label>
	<input type="radio" id="G647" name="practicum" value="G647"><br>
	<br>

	<label for="ssupervisor">Site Supervisor's Name:</label>
	
	<select name="ssupervisor">
	   <?php
		$query = "SELECT * FROM SUPERVISOR WHERE SupervisorTypeID = 2";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->FirstName . "</option>";
		}
	   ?>
	</select>
	<br>

	<label for="supervisoremail">Site Supervisor's Email:</label>
	
	<select name="supervisoremail">
	   <?php
		$query = "SELECT * FROM SUPERVISOR WHERE SupervisorTypeID = 2";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->Email . "</option>";
		}
	   ?>
	</select>
	<br>

	<label for="fsupervisor">Faculty Supervisor's Name:</label>
	
	<select name="fsupervisor">
	   <?php
		$query = "SELECT * FROM SUPERVISOR WHERE SupervisorTypeID = 1";
		$stmt = $con->prepare($query);
		$stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<option>" . $row->FirstName . "</option>";
		}
	   ?>
	</select>
	<br>

	<input type="button" value="Back" onclick="window.location.href='liability_and_agreement.php';"><input type="submit">
	</div>
	</form>
</body>
