<?php
include 'conn.php';
//Delete record from database

$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];

$query = "DELETE FROM `user` WHERE   `name`='$name' && email = '$email'";
if ($connection->query($query)) {
    $msg = array("status" =>1 , "msg" => "Record Deleted successfully");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
