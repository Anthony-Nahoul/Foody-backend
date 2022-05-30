<?php
header('Access-Control-Allow-Origin:*');

include("connection.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = hash("sha256", $_POST["password"]);
$userpic = $_POST["userpic"];
$type = $_POST["type"];

$query = $mysqli->prepare("INSERT INTO users(fname, lname, email, password, user_piclink, type) VALUES (?, ?, ?, ?, ?, ?)");
$query->bind_param("ssssss", $firstname, $lastname, $email, $password, $userpic, $type);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>