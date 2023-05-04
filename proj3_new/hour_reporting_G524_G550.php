<?php
	// hard coded until database is up and running
	$age_group1 = "0-5";
	$age_group2 = "6-11";
	$age_group3 = "12-14";
	$age_group4 = "15-19";
?>

<!--
TITLE: hour reporting form for G524 and G550 specifically
AUTHOR: Alexander Reinhardt (AR)
CREATE DATE: 26 Sep 2021
PURPOSE: provide a page for a student to enter specific info for the G524 and G550 practicum
LAST MODIFIED ON: 26 Sep 2021
LAST MODIFIED BY: Alexander Reinhardt (AR)
MODIFICATION HISTORY:
26 Sep 2021: created (AR)
-->

<html lang="en">
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>G524 and G550 reporting</title>
	<style>
		td, th{
			text-align:center;
			border: 1px solid #cfcfcf;
			width: 300px;
			height: 25px;
		}
		h1{
			color:#B71C1C;

		}

	</style>
</head>

<body>
	<form action="G500_confirmation.php">
		<div id="supervisionHours">
		  <h1>Supervision Hours</h1><br>
		  <p>Enter the number of supervision hours </p>
		  <table>
			<tr>
				<th></th>
				<th>Individual</th>
				<th>Triadic Group</th>
			</tr>
			<tr>
				<td>Number of Hours</td>
				<td><input type="number" name="t0r1c1" value=0 required></td>
				<td><input type="number" name="t0r1c2" value=0 required></td>
			</tr>
		  </table>
		</div>
		
		<div id="ageGroup">
		  <h1>Age Group Direct Contacts</h1><br>
		  <p>Enter the number of hours and clients for each age group</p>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Individual Student Counseling Client Hours</th>
				<th>Individual Student Counseling Number of Clients</th>
				<th>Group Student Counseling Client Hours</th>
				<th>Group Student Counseling Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t1r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t1r1c2" value=0 min=0 required></td>
				<td><input type="number" name="t1r1c3" value=0 min=0 required></td>
				<td><input type="number" name="t1r1c4" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t1r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t1r2c2" value=0 min=0 required></td>
				<td><input type="number" name="t1r2c3" value=0 min=0 required></td>
				<td><input type="number" name="t1r2c4" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t1r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t1r3c2" value=0 min=0 required></td>
				<td><input type="number" name="t1r3c3" value=0 min=0 required></td>
				<td><input type="number" name="t1r3c4" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t1r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t1r4c2" value=0 min=0 required></td>
				<td><input type="number" name="t1r4c3" value=0 min=0 required></td>
				<td><input type="number" name="t1r4c4" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div>
		  <h1>Teaching and Guidance Lessons</h1><br>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Client Hours</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t2r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t2r1c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t2r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t2r2c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t2r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t2r3c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t2r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t2r4c2" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div>
		  <h1>Career and College Counseling Interventions</h1><br>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Client Hours</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t3r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t3r1c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t3r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t3r2c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t3r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t3r3c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t3r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t3r4c2" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div>
		  <h1>Education Testing</h1><br>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Client Hours</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t4r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t4r1c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t4r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t4r2c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t4r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t4r3c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t4r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t4r4c2" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div>
		  <h1>Student Scheduling and Academic Planning</h1><br>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Client Hours</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t5r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t5r1c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t5r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t5r2c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t5r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t5r3c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t5r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t5r4c2" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div>
		  <h1>Student Orientation and Assemblies</h1><br>
		  <table>
			<tr>
				<th>Age Group</th>
				<th>Client Hours</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td><?php print($age_group1); ?></td>
				<td><input type="number" name="t6r1c1" value=0 min=0 required></td>
				<td><input type="number" name="t6r1c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group2); ?></td>
				<td><input type="number" name="t6r2c1" value=0 min=0 required></td>
				<td><input type="number" name="t6r2c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group3); ?></td>
				<td><input type="number" name="t6r3c1" value=0 min=0 required></td>
				<td><input type="number" name="t6r3c2" value=0 min=0 required></td>
			</tr>
			<tr>
				<td><?php print($age_group4); ?></td>
				<td><input type="number" name="t6r4c1" value=0 min=0 required></td>
				<td><input type="number" name="t6r4c2" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div id="raceEthnicity">
		  <h1>Race - Ethnicity</h1>
		  <table>
			<tr>
				<th>Race-Ethnicity</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td>African American/Black/African Origin</td>
				<td><input type="number" name="t7r1c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Latino-a/Hispanic</td>
				<td><input type="number" name="t7r2c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Asian-American/Asian Origin/Pacific Islander</td>
				<td><input type="number" name="t7r3c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>European Origin/White</td>
				<td><input type="number" name="t7r4c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Bi-Racial/Multi-Racial</td>
				<td><input type="number" name="t7r5c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Other Race(Specifiy)</td>
				<td><input type="number" name="t7r6c1" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div id="sexualOrientation">
		  <h1>Sexual Orientation</h1>
		  <table>
			<tr>
				<th>Sexual Orientation</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td>Heterosexual</td>
				<td><input type="number" name="t8r1c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Gay</td>
				<td><input type="number" name="t8r2c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Lesbian</td>
				<td><input type="number" name="t8r3c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Bisexual</td>
				<td><input type="number" name="t8r4c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Other sexual orientation(please specify)</td>
				<td><input type="number" name="t8r5c1" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<div id="disability">
		  <h1>Disability</h1>
		  <table>
			<tr>
				<th>Disability</th>
				<th>Number of Clients</th>
			</tr>
			<tr>
				<td>Physical/Orthopedic Disability</td>
				<td><input type="number" name="t9r1c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Blind/Visually Impaired</td>
				<td><input type="number" name="t9r2c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Deaf/hearing Impaired</td>
				<td><input type="number" name="t9r3c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Learning/Cognitive Disability</td>
				<td><input type="number" name="t9r4c1" value=0 min=0 required></td>
			</tr>
			<tr>
				<td>Developmental Disability</td>
				<td><input type="number" name="t9r5c1" value=0 min=0 required></td>
			</tr>
		  </table>
		</div>

		<input type="submit" value="Submit For Approval"><input type="button" value="Save">
	</form>
</body>