<?php
include 'conn.php';

$sql = "INSERT INTO `service`.`user` (`id`, `name`, `email`, `status`) VALUES (NULL, 'testing name', 
                                      'testingemail@gmail.com', 'active');";

if ($connection->query($sql)) {
	$msg = array("status" =>1 , "msg" => "Your record inserted successfully");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
} 

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($conn);
