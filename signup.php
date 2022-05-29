<?php

include("connection.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$userpic = $_POST["userpic"];
$type = $_POST["type"];

$query = $mysqli->prepare("INSERT INTO users(firstname, lastname, email, password, userpic, type) VALUES (?, ?, ?, ?, ?, ?)");
$query->bind_param("ssssss", $firstname, $lastname, $email, $password, $userpic, $type);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>