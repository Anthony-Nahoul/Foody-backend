<?php
include("connection.php");
$name = $_POST["name"];
$description = $_POST["description"];
$restopic = $_POST["restopic"];
$address = $_POST["address"];
$category = $_POST["category"];

$query = $mysqli->prepare("INSERT INTO restaurants(name, description , piclink, address, categories_id) VALUES (?, ?, ?, ?, ?)");
$query->bind_param("ssssi", $name, $description, $restopic, $address, $category);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>