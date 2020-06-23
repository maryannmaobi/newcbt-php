<?php
require 'database.php';
$id = $_GET['id'];

// $query = "SELECT questions, optionA, optionB, optionC, optionD, correctans
// FROM questions
// WHERE course_id = 4;";

$query = "SELECT * from questionss join courses 
on questionss.course_id = courses.id where questionss.course_id = $id";
$myquery = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_all($myquery, MYSQLI_ASSOC));

?>


