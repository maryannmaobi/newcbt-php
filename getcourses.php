<?php
require 'database.php';
// $id = $_GET['id'];
$query = "SELECT * from courses";
$allquery = mysqli_query($mysqli, $query);

echo json_encode(mysqli_fetch_all($allquery, MYSQLI_ASSOC));