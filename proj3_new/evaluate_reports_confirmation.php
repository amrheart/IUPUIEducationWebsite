<?php
	$message1 = "";
	$message2 = "";
	$message3 = "";

	if(array_key_exists("student1", $_GET)){
		$message1 = "Student 1: " . $_GET['student1'];
	}
	if(array_key_exists("student2", $_GET)){
		$message2 = "Student 2: " . $_GET['student2'];
	}
	if(array_key_exists("student3", $_GET)){
		$message3 = "Student 3: " . $_GET['student3'];
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
	<form>
	<h1>Is this information correct?</h1><br>
	<?php
		foreach($_GET as $val){
			print($val . "<br>");
		}
	?>
	<input type="button" value="Back" onclick="window.location.href='evaluate_reports.php';"><input type="submit">
	</form>
</body>