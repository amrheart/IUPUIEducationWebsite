<?php
session_start();
require_once "dbconnect.php";


?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>evaluate reports</title>
	<style>
	td,th{
		border: 1px solid #cfcfcf;
		padding: 8px;
		text-align: center;
	}
	body{
		width:20%;
   		margin:auto;
   		border-radius: 5px;
   		background-color: #FFFFFF;
   		padding: 20px;
   		border: 50px solid #B71C1C;
		position:relative;
		text-align: center;
	}
	h1{
		color:#B71C1C;
	}
	table{
		margin-right: auto;
		margin-left: auto;
	}
	</style>
</head>


<body>
<h1>New Site</h1>
	<table>
	    <tr>
		<th>Approve Site</th>
		<th>Site Name</th>
	    </tr>
	    <?php
		$query = "SELECT * FROM LOCATION WHERE ActiveStatus = 0";
		$stmt = $con->prepare($query);
		$stmt->execute();
		$row_num = 0;
		while($row = $stmt->fetch(PDO::FETCH_OBJ)){
			echo "<tr>" . "<td><a href='admin_approve_site_confirmation.php?id=".$row->ID. "'". ">Approve Site</a> </td>". "<td>" . $row->Name . "</td><tr>";
			$row_num += 1;
		}
	    ?>
	</table>
</body>