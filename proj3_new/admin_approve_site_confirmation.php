<?php
session_start();
require_once "dbconnect.php";

$id = $_GET['id'];
$msg = "";
$query = "UPDATE LOCATION SET ActiveStatus = 1 WHERE ID = " . $id;
$stmt = $con->prepare($query);
if($stmt->execute()){
	$msg = "Site Approved";
}
else{
	$msg = "Something Went Wrong";
}


?>

<body>
Site Approved<br>
<?php echo $id; ?><br>
<input type="button" value="Continue" onclick="window.location.href='admin_approve_site.php';">
</body>