<?php

include("connection.php");
$approved = $_POST["approved"];
$id = $_POST["id"];
$query = $mysqli->prepare("UPDATE reviews set approved = ? WHERE id= ?");
$query->bind_param("ii", $approved, $id); 
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);

?>