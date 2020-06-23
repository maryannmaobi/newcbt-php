<?php

require 'database.php';

$query = "SELECT optionA, optionB, optionC, optionD from questions join courses 
on questions.course_id = courses.id";
$allquery = mysqli_query($mysqli,$query);

echo json_encode(mysqli_fetch_all($allquery, MYSQLI_ASSOC));