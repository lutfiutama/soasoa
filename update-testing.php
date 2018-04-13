<?php
error_reporting(0);
include 'conn.php';

$query = "UPDATE `user` SET `name`='lutfi' ,`email`='lutfi@gmail.com' WHERE  `id`='1'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
