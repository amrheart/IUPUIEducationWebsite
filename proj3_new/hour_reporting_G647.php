<?php


?>

<!--
TITLE: hour reporting form for G647 specifically
AUTHOR: Alexander Reinhardt (AR)
CREATE DATE: 26 Sep 2021
PURPOSE: provide a page for a student to enter specific info for the G647 practicum
LAST MODIFIED ON: 26 Sep 2021
LAST MODIFIED BY: Alexander Reinhardt (AR)
MODIFICATION HISTORY:
26 Sep 2021: created (AR)
-->

<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>G647 reporting</title>
	<style>
		td, th{
			text-align:center;
			border: 1px solid #cfcfcf;
			width: 300px;
			height: 25px;
		}
		form{
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
		table{
			margin-left: auto;
			margin-right: auto;
		}
		h1{
			color:#B71C1C;
		}
	</style>
</head>

<body>
	<form action="647_confirmation.php">
	  <div id="hoursProfessionalService">
	    <h1>Hours of Professional Service (direct service hours)</h1><br>
	    <table>
	      <tr>
		<th>Activity</th>
		<th>Hours</th>
	      </tr>
	      <tr>
		<td>Individual Counseling</td>
		<td><input type="number" min=0 name="hic" required></td>
	      </tr>
	      <tr>
		<td>Group Counseling</td>
		<td><input type="number" min=0 name="hgc" required></td>
	      </tr>
	      <tr>
		<td>Assessment/Evaluation/Testing</td>
		<td><input type="number" min=0 name="haet" required></td>
	      </tr>
	      <tr>
		<td>Other Categories</td>
		<td><input type="number" min=0 name="hoc1" required></td>
	      </tr>
	      <tr>
		<td>Total</td>
		<td>Total Hours</td>
	      </tr>
	    </table>
	  </div>
	  <div id="hoursEducationalActivities">
	    <h1>Hours of Educational Activities (indirect service hours)</h1>
	    <table>
	      <tr>
		<th>Activity</th>
		<th>Hours</th>
	      </tr>
	      <tr>
		<td>Individual/Triadic Supervision</td>
		<td><input type="number" min=0 name="hits" required></td>
	      </tr>
	      <tr>
		<td>Group Supervision</td>
		<td><input type="number" min=0 name="hgs" required></td>
	      </tr>
	      <tr>
		<td>Professional/Educational Presentations</td>
		<td><input type="number" min=0 name="hpep" required></td>
	      </tr>
	      <tr>
		<td>Research/Professional Reading</td>
		<td><input type="number" min=0 name="hrpr" required></td>
	      </tr>
	      <tr>
		<td>Report Writing/Case Notes</td>
		<td><input type="number" min=0 name="hrwcn" required></td>
	      </tr>
	      <tr>
		<td>Case Conference/Staffing</td>
		<td><input type="number" min=0 name="hccs" required></td>
	      </tr>
	      <tr>
		<td>Other Categories:</td>
		<td><input type="number" min=0 name="hoc2" required></td>
	      </tr>
	      <tr>
		<td>Total</td>
		<td>Total Hours</td>
	      </tr>
	    </table>
	  </div>
	<!-- Both Buttons Should probably lead to the student dashboard -->
	<input type="submit" value="Submit For Approval"><input type="submit" value="Save">
	</form>
</body>