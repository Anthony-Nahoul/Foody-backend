<?php
include("connection.php");
$status = $_POST["status"];
$id = $_POST["id"];
$query = $mysqli->prepare("UPDATE reviews set status = ? WHERE id= ?");
$query->bind_param("si", $status, $id); 
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);

?>