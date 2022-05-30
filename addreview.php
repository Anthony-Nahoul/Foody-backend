<?php

include("connection.php");
$userid = $_POST["userid"];
$restaurantid = $_POST["restaurantid"];
$description = $_POST["description"];
$approved = 0;

$query = $mysqli->prepare("INSERT INTO reviews(users_id, restaurants_id , review_description, approved) VALUES (?, ?, ?, ?)");
$query->bind_param("iisi", $userid, $restaurantid, $description, $approved);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>