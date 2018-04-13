<?php
include 'conn.php';
//Select data from database


$getData = "select * from user";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur)){
	
	$msg[] = array("id" => $r['id'], "name" => $r['name'], "email" => $r['email'], "status" => $r['status']);
}
$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
