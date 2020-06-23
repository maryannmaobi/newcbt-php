
<?php
include_once("database.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
$request = json_decode($postdata);
$name = trim($request->name);
$pwd = mysqli_real_escape_string($mysqli, trim($request->pwd));
$email = mysqli_real_escape_string($mysqli, trim($request->email));
$identification = mysqli_real_escape_string($mysqli, trim($request->identification));

$sql = "INSERT INTO users(name, email, identification, password) VALUES ('$name','$email','$identification', '$pwd')";
if ($mysqli->query($sql) === TRUE) {
$authdata = [
'name' => $name,
'email' => $email,
'identification' => $identification,
'pwd' => '',
'Id' => mysqli_insert_id($mysqli)
];
echo json_encode($authdata);
}
}

?>