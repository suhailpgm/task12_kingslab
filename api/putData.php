<?php
include '../dbconfig.php';

// put api address
// localhost/task12/api/putData.php


//input data in body
// Array
// (
//     [name] => test3
// )


$put=file_get_contents('php://input');
$data=(array)json_decode($put, true);


$squery="INSERT INTO list (`listitem`) VALUES ('".$data[0]['name']."')";
$result=$mysqli->query($squery);

//for to view the data entered 
print_r($data[0]);

?>