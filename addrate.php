<?php
header('Access-Control-Allow-Origin:*');
include("connection.php");
$userid = $_POST["userid"];
$restaurantid = $_POST["restaurantid"];
$value = $_POST["value"];
$approved = 0;

$query = $mysqli->prepare("INSERT INTO rates(users_id, restaurants_id , value) VALUES (?, ?, ?)");
$query->bind_param("iii", $userid, $restaurantid, $value);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>