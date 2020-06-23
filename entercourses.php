<?php
require 'database.php';
$_POST = json_decode(file_get_contents('php://input'), true);

$course = $_POST['course'];
$questNo = $_POST['questNo'];
$insert = "INSERT INTO courses ( `course`, `questNo`) VALUES ('$course', '$questNo')";
$myinsert = mysqli_query($mysqli, $insert);

 $response;
 $response['success'] = "true"; 
 echo json_encode($response);

?>