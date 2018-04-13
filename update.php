<?php
include 'conn.php';
//Update record in database


$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];
$id = $_POST['id'];

$query = "UPDATE `user` SET `name`='$name' ,`email`='$email' WHERE  `id`='$id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
