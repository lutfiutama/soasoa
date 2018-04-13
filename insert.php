<?php
include 'conn.php';
//Insert data into database
$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];

$sql = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, '$name', '$email', '$status');";

if ($connection->query($sql)) {
	$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);
